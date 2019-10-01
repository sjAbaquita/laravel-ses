<?php

namespace oliveready7\LaravelSes\Models;

use Illuminate\Database\Eloquent\Model;

class EmailLink extends Model
{
    protected $table = 'laravel_ses_email_links';

    protected $guarded = [];

    public function sentEmail()
    {
        return $this->belongsTo('oliveready7\LaravelSes\Models\SentEmail');
    }

    public function setClicked($clicked)
    {
        $this->clicked = $clicked;
        $this->save();
        return $this;
    }

    public function incrementClickCount()
    {
        $this->click_count++;
        $this->save();
        return $this;
    }
}
