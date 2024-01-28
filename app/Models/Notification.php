<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function notifiable()
    {
        return $this->morphTo();
    }

    public function read()
    {
        $this->read_at = now();
        $this->save();
    }

    public function unread()
    {
        $this->read_at = null;
        $this->save();
    }

    public function markAsRead()
    {
        $this->read();
    }

    public function markAsUnread()
    {
        $this->unread();
    }

    public function isUnread()
    {
        return $this->read_at === null;
    }

    public function isRead()
    {
        return $this->read_at !== null;
    }
}
