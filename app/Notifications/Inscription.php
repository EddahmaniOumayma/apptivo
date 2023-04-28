<?php

namespace App\Notifications;


use App\Models\User;
use PDF;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Inscription extends Notification
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

    
        
        $pdf=PDF::loadView('Fonctionnaire.InscriptionPdf',compact('notifiable')) ;
        $pathFile = storage_path('app/public/pdf/files/' .$notifiable->nom . '.pdf');   

        return (new MailMessage)
        ->line('Salut ' . $notifiable->nom . ' ' . $notifiable->prenom . ',')
        ->line('vous avez le droit de passer le concour  d aggregation  pour promu au grade prochain!!')
        
        ->attachData($pdf->output(), "InscriptionPdf.pdf")
        ->line('Merci !');
        
        
    }


    public function toDatabase($notifiable)
    {
        return [
           'body'=>'Félicitations' .$notifiable->nom . ' ' . $notifiable->prenom . ' , vous avez le droit de passer le concour  d aggregation  pour promu au grade prochain!',
           'icon'=>'fas fa-exclamation-triangle text-white',
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
