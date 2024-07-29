<?php

namespace Combindma\Option;

use Illuminate\Support\Facades\Storage;
use Spatie\Valuestore\Valuestore;

class Option
{
    public string $fileName;

    public string $disk;

    public function __construct()
    {
        $this->fileName = config('option.filename');
        $this->disk = config('option.disk');
        $this->init();
    }

    public function init(): void
    {
        if (! Storage::disk($this->disk)->exists($this->fileName)) {
            Storage::disk($this->disk)->put($this->fileName, json_encode([]));
        }
    }

    public function make(): Valuestore
    {
        return Valuestore::make(Storage::disk($this->disk)->path($this->fileName));
    }
}
