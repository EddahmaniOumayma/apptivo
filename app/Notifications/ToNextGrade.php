<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ToNextGrade extends Notification
{
    use Queueable;
    public $user;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    
    public function __construct($user)
    {
        $this->user = $user;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
       

    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
        ->line('Salut ' . $notifiable->nom . ' ' . $notifiable->prenom . ',')
        ->line('Félicitations, vous avez été promu au prochain grade !')
        ->action('Vérifier votre niveau grade', url('/apptivo.com'))
        ->line('Merci !');
    }

    public function toDatabase($notifiable)
    {
        return [
           'body'=>'Félicitations' .$notifiable->nom . ' ' . $notifiable->prenom . ' , Félicitations, vous avez été promu au prochain grade  !',
           'icon'=>'fa fa-flag',
           'url'=>url('/apptivo.com')
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
