<?php

namespace App\Objects\Models\Auth{

    use App\Objects\Models\Auth\Settings;
    use Laravel\Cashier\Billable;
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class User extends Authenticatable
    {
        use Notifiable, Billable;

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'name', 'email', 'password',
        ];

        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = [
            'password', 'remember_token',
        ];

        public function Settings()
        {
            $q = $this->hasMany(Settings::class);
            // dump($q->toSql(), $q->getBindings());
            return $q;
        }
    }
}
