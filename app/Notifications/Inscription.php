<?php

namespace App\Notifications;

use Barryvdh\DomPDF\PDF;
use App\Models\User;
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

        $data = [
            'user' => $notifiable,
            'message' => 'Félicitations, vous avez été promu au prochain indice de votre grade !',
            'url' => url('/Profilef')
        ];
        
        $pdf = \PDF::loadView('Fonctionnaire.InscriptionPdf',compact('data'));
        $pathFile = storage_path('app/public/pdf/files/' .$notifiable->nom . '.pdf');   // Path To Save Pdf File
        $file = $pdf->save($pathFile);  // Save Pdf File

        return (new MailMessage)
        ->line('Salut ' . $notifiable->nom . ' ' . $notifiable->prenom . ',')
        ->line('vous avez le droit de passer le concour  d aggregation  pour promu au grade prochain!!')
        ->action('Imprimer votre attestation d inscription', url('/apptivo.com'))
        ->line('Merci !')
        ->attachData($file->output(), "InscriptionPdf.pdf");
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
