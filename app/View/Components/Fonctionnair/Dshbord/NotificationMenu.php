<?php

namespace App\View\Components\Fonctionnair\Dshbord;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class NotificationMenu extends Component
{
    /**
     * Create a new component instance.
     * 
     *
     * @return void
     */
    public $notifications;
    public $newCount;

    public function __construct($count = 10)
    {
        $user=Auth::user();
        $this->notifications =$user->notifications()->take($count)->get()  ;
        $this->newCount =$user->unreadNotifications()->count()  ;



    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.fonctionnair.notification-menu');
    }
}
