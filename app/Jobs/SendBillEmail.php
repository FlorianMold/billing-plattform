<?php

namespace Rechnungsplattform\Jobs;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Rechnungsplattform\Bill;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendBillEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $bills;
    protected $filecontents;

    /**
     * Create a new job instance.
     */
    public function __construct(Bill $bill, $filecontents)
    {
        $this->bills = $bill;
        $this->filecontents = $filecontents;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $xmlname = explode('/' ,$this->filecontents[0]);
        $ending = explode('.', $xmlname[1]);
        $pdfending = explode('.', $this->bills->pdf_name);

        //verschiebt die Dateien
        Storage::move($this->filecontents[0], 'takenbills/'.$ending[0].'/'.$xmlname[1]);
        File::move('storage/app/pdfs/'.$this->bills->pdf_name, 'storage/app/takenbills/'.$pdfending[0].'/'.$this->bills->pdf_name);

    }
}
