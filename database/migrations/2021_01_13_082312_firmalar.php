<?php
//Firma tablosu oluşturma
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Firmalar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */



    public function up()
    {
        //

        Schema::create('firmalar', function (Blueprint $table) {


            $table->increments('firma_id')->start_from(0); //firma id
            $table->string('firma_tam_unvan')->nullable(); //firma tam ünvan
            $table->string('firma_kisa_adi')->nullable();
            $table->string('firma_sgk_no')->nullable();
            $table->integer('firma_tehlike_sinifi')->nullable();
            $table->integer('firma_tip')->nullable(); //şahıs tüzel
            $table->integer('ust_firma_id');
            $table->integer('sahis_firma_ad_soyad')->nullable();
            $table->string('firma_nace_kodu')->nullable();
            $table->integer('tc_kimlik_no')->nullable();;
            //$table->string('firma_tel')->nullable();
            /*

            firma_adres
            firma_sgk
            firma_tel
            firma_fax
            firma_nace
            firma_il
            firma_ilce
            firma_fatura_adresi
            firma_fatura_il
            firma_vergi_dairesi
            */

       });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //

        //eğer tablo varsa sil yazulacak
        Schema::drop('firmalar');

    }
}
