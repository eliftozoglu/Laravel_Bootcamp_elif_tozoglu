<?php

namespace App\Console\Commands;

use App\Product;
use Illuminate\Console\Command;

class isTaken extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'istaken:product';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'shows if a product is taken or not';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $product = Product::all();  //collection yapısı obje array den oluşan yığın gibi
        $product->each(function ($data) {
            $data->update([
                'is_taken' => true

            ]);
        });
        return 0;
    }
}
