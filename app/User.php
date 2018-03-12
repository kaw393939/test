<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Traits\Entity;

class User extends Authenticatable
{
    use Notifiable;
    use Entity;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile()
    {

        return $this->hasOne('App\Profile', 'user_id', 'id');
    }

    public function role()
    {

        return $this->hasOne('App\systemRole', 'user_id', 'id');
    }
    public function channels() {

        return $this->belongsToMany('App\Channel', 'user_channels', 'user_id', 'channel_id');
    }

    public function getNotificationPref($OverideChannel = NULL)
    {
        if(is_null($OverideChannel)) {
            $ActiveChannels = $this->channels()->where('active', 1)->get();
            foreach ($ActiveChannels as $channel) {

                $NotifyChannels[] = $channel->name;
            }
        } else {
            $NotifyChannels[] = $OverideChannel;
        }
        return $NotifyChannels;
    }

}
