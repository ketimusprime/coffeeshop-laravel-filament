<?php

use App\Models\Setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

            Setting::create([
                'key' => 'app_name',
                'label' => 'Judul Website',
                'value' => 'Portofolio',
                'type' => 'text'
            ]);
            Setting::create([
                'key' => 'location',
                'label' => 'alamat',
                'value' => 'Tangerang, Indonesia',
                'type' => 'text'
            ]);
            Setting::create([
                'key' => 'youtube',
                'label' => 'Youtube',
                'value' => 'https://www.youtube.com/@ry4ns04',
                'type' => 'text'
            ]);
            Setting::create([
                'key' => 'instagram',
                'label' => 'Instagram',
                'value' => 'https://www.instagram.com/@ry4ns04',
                'type' => 'text'
            ]);
            Setting::create([
                'key' => 'tiktok',
                'label' => 'Tiktok',
                'value' => 'https://www.tiktok.com/@ry4ns04',
                'type' => 'text'
            ]);
            Setting::create([
                'key' => 'description',
                'label' => 'Description',
                'value' => 'Portofolio Website',
                'type' => 'text'
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
