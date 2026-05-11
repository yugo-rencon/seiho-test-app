<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\UserExamResult;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'pass_score',
        'stripe_customer_id',
        'google_id',
        'email_verified_at',
        'registered_scope',
        'registered_return_to',
        'is_admin',
        'is_premium',
        'is_seiho_premium',
        'is_daigaku_premium',
    ];

    public function examResults()
    {
        return $this->hasMany(UserExamResult::class);
    }

    public function hasPremiumAccess(string $scope = 'seiho'): bool
    {
        if ($scope === 'daigaku') {
            return (bool) $this->is_daigaku_premium;
        }

        if (in_array($scope, ['ippan', 'senmon', 'ouyou'], true)) {
            return DB::table('purchases')
                ->where('user_id', $this->id)
                ->where('status', 'paid')
                ->whereIn('scope', [$scope, 'basic'])
                ->exists();
        }

        if ($scope === 'basic') {
            if (DB::table('purchases')
                ->where('user_id', $this->id)
                ->where('status', 'paid')
                ->where('scope', 'basic')
                ->exists()) {
                return true;
            }

            $paidScopes = DB::table('purchases')
                ->where('user_id', $this->id)
                ->where('status', 'paid')
                ->whereIn('scope', ['ippan', 'senmon', 'ouyou'])
                ->distinct()
                ->pluck('scope')
                ->all();

            return count($paidScopes) === 3;
        }

        return (bool) $this->is_seiho_premium;
    }

    public function hasAnyPremiumAccess(): bool
    {
        if ((bool) $this->is_seiho_premium || (bool) $this->is_daigaku_premium) {
            return true;
        }

        return DB::table('purchases')
            ->where('user_id', $this->id)
            ->where('status', 'paid')
            ->whereIn('scope', ['ippan', 'senmon', 'ouyou', 'basic'])
            ->exists();
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean',
        'is_premium' => 'boolean',
        'is_seiho_premium' => 'boolean',
        'is_daigaku_premium' => 'boolean',
    ];
}
