<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;


class ToNextIndice extends Notification
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
        ->line('Félicitations, vous avez été promu au prochain indice dans votre grade !')
        ->action('Vérifier votre niveau indice Eshlon', url('/Profilef'))
       
        ->line('Merci !');
      
    }

    public function toDatabase($notifiable)
    {
        return [
           'body'=>'Félicitations' .$notifiable->nom . ' ' . $notifiable->prenom . ' , vous avez été promu au prochain indice dans votre grade !',
           'icon'=>'fas fa-exclamation-triangle text-white',
           'url'=>url('/Profilef')
        ];
       

    }



    
}
