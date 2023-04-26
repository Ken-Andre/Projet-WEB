<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //specify the connection to use
        DB::connection('mysql2')->table('products')->insert
        (
            [
                ['designation'=> 'Airpods_pro_blue','quantity'=>'8','price'=>'2000','category'=>'electronics','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\airpods_4.jpg"],
                ['designation'=> 'Airpods_pro5_white','quantity'=>'5','price'=>'2500','category'=>'electronics','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\airspods.jpg"],
                ['designation'=> 'banane-portable_imprime','quantity'=>'3','price'=>'3000','category'=>'accessories','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\banane_portable.jpg"],
                ['designation'=> 'biscuits_nutella_166g','quantity'=>'10','price'=>'1000','category'=>'alimentation','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\biscuit_nutella.jpg"],
                ['designation'=> 'Buds live_black','quantity'=>'2','price'=>'5000','category'=>'electronics','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\black_buds live.jpg"],
                ['designation'=> 'Rohdia_bloc-notes','quantity'=>'6','price'=>'1500','category'=>'accesories','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\bloc_notes.jpg"],
                ['designation'=> 'evian_water','quantity'=>'15','price'=>'750','category'=>'drink','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\bouteille_eau_evian.jpg"],
                ['designation'=> 'isotherm_bottle_bleu_1L','quantity'=>'5','price'=>'2000','category'=>'accesories','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\bouteille_isotherme.jpg"],
                ['designation'=> 'UV_bottle_bleu_250cL','quantity'=>'2','price'=>'3500','category'=>'accesories','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\bouteille_uv.jpg"],
                ['designation'=> 'buds_pro_grey','quantity'=>'2','price'=>'3500','category'=>'electronics','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\bud2pro'.jpg"],
                ['designation'=> 'Diary_book_200pages','quantity'=>'3','price'=>'2000','category'=>'accesories','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\cahier_journal.jpg"],
                ['designation'=> 'Oxford_book_100pages','quantity'=>'6','price'=>'1000','category'=>'accesories','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\cahier_oxford.jpg"],
                ['designation'=> 'spirale_book_400pages','quantity'=>'1','price'=>'3000','category'=>'accesories','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\cahier_spirale.jpg"],
                ['designation'=> 'bleutooth_earphones_black','quantity'=>'5','price'=>'3000','category'=>'electronics','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\casque_bleutooth.jpg"],
                ['designation'=> 'bleutooth_cat_earphones_pink','quantity'=>'3','price'=>'3500','category'=>'electronics','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\casque_chat.jpg"],
                ['designation'=> 'typeC_charge_25W','quantity'=>'3','price'=>'2500','category'=>'electronics','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\charge_typeC.jpg"],
                ['designation'=> 'hp_laptop_charger','quantity'=>'8','price'=>'6000','category'=>'electronics','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\chargeur_pchp.jpg"],
                ['designation'=> 'powerbank_charger','quantity'=>'2','price'=>'6500','category'=>'electronics','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\chargeur_powerbank.jpg"],
                ['designation'=> 'Faster_usb_key_64go','quantity'=>'6','price'=>'7000','category'=>'electronics','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\cleusb_faster.jpg"],
                ['designation'=> 'hp_usb_key_500go','quantity'=>'4','price'=>'9000','category'=>'electronics','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\cleusb_hp.jpg"],
                ['designation'=> 'sanDisk_usb_key_500go','quantity'=>'2','price'=>'8500','category'=>'electronics','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\cleusb_sandisk.jpg"],
                ['designation'=> 'Toshiba_DD_1to','quantity'=>'2','price'=>'40000','category'=>'electronics','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\disk dur _toshiba1tp.jpg"],
                ['designation'=> 'Transcend_DD_500go','quantity'=>'6','price'=>'25000','category'=>'electronics','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\diskdur_transcend500go.jpg"],
                ['designation'=> 'Djino_1.5L','quantity'=>'6','price'=>'750','category'=>'drink','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\djino_1l.jpg"],
                ['designation'=> 'Apple_earphones','quantity'=>'10','price'=>'5000','category'=>'electronics','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\ecouteurs_fils_apple.jpg"],
                ['designation'=> 'airpods_case_pokemon','quantity'=>'1','price'=>'6500','category'=>'accesories','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\etui_air.jpg"],
                ['designation'=> 'airpods_case_groot','quantity'=>'5','price'=>'5000','category'=>'accesories','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\etui_airpords.jpg"],
                ['designation'=> 'airpods_case_pink','quantity'=>'2','price'=>'5500','category'=>'accesories','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\etui_ecout.jpg"],
                ['designation'=> 'original_laptop_case','quantity'=>'2','price'=>'8500','category'=>'accesories','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\etui_ordi.jpg"],
                ['designation'=> 'plastic_water_bottle_1.5L','quantity'=>'5','price'=>'4500','category'=>'accesories','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\gourde_eau.jpg"],
                ['designation'=> 'herbal_phone_case','quantity'=>'3','price'=>'4500','category'=>'accesories','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\herbal_phones case.jpg"],
                ['designation'=> 'jbl_charge','quantity'=>'1','price'=>'15000','category'=>'electronics','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\jbl_charge.jpg"],
                ['designation'=> 'gimgember_juice','quantity'=>'11','price'=>'250','category'=>'drink','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\jus_gimgembre.png"],
                ['designation'=> 'bissap_juice','quantity'=>'21','price'=>'300','category'=>'drink','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\jus-bissap.jpg"],
                ['designation'=> 'OLE_yoghurt','quantity'=>'10','price'=>'300','category'=>'drink','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\yaourt_ole.jpg"],
                ['designation'=> 'Dolait_yoghurt','quantity'=>'10','price'=>'400','category'=>'drink','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\yaourt.jpg"],
                ['designation'=> 'stereo_earphones','quantity'=>'5','price'=>'4000','category'=>'electronics','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\stereo_sans_fil.jpg"],
                ['designation'=> 'laptop_bag_grey','quantity'=>'5','price'=>'6000','category'=>'accessories','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\sacoche_machine.jpg"],
                ['designation'=> 'men_bag_black','quantity'=>'7','price'=>'7000','category'=>'accessories','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\sacoche_homme.jpg"],
                ['designation'=> 'sport_bag_black','quantity'=>'2','price'=>'7500','category'=>'accessories','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\sacoche_eden.jpg"],
                ['designation'=> 'laptop_case_pink','quantity'=>'1','price'=>'7500','category'=>'accessories','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\pochette-ORDI.jpg"],
                ['designation'=> 'airpods_case_darkvador','quantity'=>'1','price'=>'3500','category'=>'accessories','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\pochette_air.jpg"],
                ['designation'=> 'phone_case_automn_print_iphone13','quantity'=>'3','price'=>'5500','category'=>'accessories','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\phones.jpg"],
                ['designation'=> 'phone_case_alien_print_iphone11','quantity'=>'1','price'=>'5500','category'=>'accessories','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\phone_alien.jpg"],
                ['designation'=> 'phone_case_alien_print_iphone11','quantity'=>'1','price'=>'5500','category'=>'accessories','image'=>"C:\Users\ouank\OneDrive\Bureau\projet web\assets\phone_alien.jpg"],



            ]
        );
    }
}
