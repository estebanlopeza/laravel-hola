<?php

namespace App\Console\Commands;

use App\Company;
use Illuminate\Console\Command;

class AddCompanyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'contact:company';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adds a company';


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $name = $this->ask('¿Cual es el nombre de la Compañía?');
        $phone = $this->ask('¿Cual es el teléfono de la Compañía?');

        if ($this->confirm('¿Está seguro que desea insertar la Compañía '.$name.'?')) {
            $company = Company::create([
                'name' => $name,
                'phone' => $phone,
            ]);
            return $this->info('Creado: '. $company->name);
        }
            
        $this->warn('No se ha creado la compañía: ');

    }
}
