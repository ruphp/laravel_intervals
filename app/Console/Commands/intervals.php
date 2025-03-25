<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class intervals extends Command
{
    private $left = 0;
    private $right = 0;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'intervals:list  {--left=}  {--right=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $intervals = app(\App\Models\Intervals::class);

        $this->left = (int)$this->option('left');
        $this->right = (int)$this->option('right');

        $results = $intervals->where('start', '<=', $this->left);

        if ($this->right) {
            $results->where(
                function ($query) {
                    $query->where('end', '>=', $this->right)
                        ->orWhereNull('end');
            });
        }
        else {
            $results->whereNull('end');
        }
        $results = $results->get();

        echo '|  id  | start |  end  |' . PHP_EOL;

        foreach ($results as $result) {
            echo "| {$result['id']} | {$result['start']} | {$result['end']} |" . PHP_EOL;

        }
    }
}
