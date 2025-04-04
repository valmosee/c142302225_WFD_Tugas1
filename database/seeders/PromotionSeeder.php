<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Promotion;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Promotion::create([
            'title' => 'Gomachi Butadon',
            'description' => ' 
                Gomachi Butadon adalah hidangan Jepang yang terdiri dari nasi putih yang disajikan dengan irisan daging babi (butadon) yang dimasak dengan saus kecap manis dan kadang-kadang diberi tambahan bahan lainnya seperti telur, daun bawang, dan bahan pelengkap lainnya. "Gomachi" biasanya merujuk pada rasa atau nama tempat tertentu yang berhubungan dengan hidangan ini, sementara "butadon" merujuk pada daging babi (buta) yang dimasak dengan cara tertentu.
                Hidangan ini cukup populer di Jepang karena kombinasi daging babi yang empuk dengan rasa manis dan gurih dari sausnya, disajikan di atas nasi hangat.

                Gomachi Butadon adalah restoran Jepang yang mengkhususkan diri dalam menyajikan butadon, yaitu hidangan nasi dengan irisan daging babi panggang yang dibumbui dengan saus khas Jepang. Restoran ini dikenal sebagai pelopor butadon autentik di Indonesia.
                Pada Desember 2024, Gomachi Butadon membuka cabang di Pakuwon Mall, Surabaya, yang menandai ekspansinya ke kota tersebut. Dalam rangka pembukaan tersebut, mereka mengadakan promo beli 1 gratis 1 butadon pada 20-22 Desember 2024.
                Menu utama mereka meliputi berbagai ukuran butadon, mulai dari ukuran kecil hingga ekstra besar, serta variasi ramen dan hidangan pendamping seperti gyoza dan salad bayam. Harga menu berkisar antara Rp66.000 hingga Rp227.000 untuk butadon, dan hidangan lainnya dengan harga yang bervariasi. 
                Bagi Anda yang berada di Surabaya dan ingin menikmati hidangan Jepang autentik, Gomachi Butadon di Pakuwon Mall dapat menjadi pilihan yang tepat.',
            'image' => 'https://assets-pergikuliner.com/Hyc2RiezTw5osrvc8P4thCziBmM=/fit-in/1366x768/smart/filters:no_upscale()/https://assets-pergikuliner.com/uploads/image/picture/3185717/picture-1707445807.jpg'
        ]);

        Promotion::create([
            'title' => 'Paper Lunch',
            'description' => '
                Pepper Lunch adalah restoran Jepang yang menawarkan konsep "Do-It-Yourself" dengan menyajikan berbagai menu seperti beef pepper rice, chicken pepper rice, dan salmon pepper rice yang disajikan di atas hot plate sehingga pelanggan dapat memasak sendiri sesuai selera. Restoran atau kafe yang menyajikan berbagai hidangan ringan hingga makanan berat, biasanya dengan konsep modern dan cozy. Namun, informasi spesifik mengenai "Paper Lunch" masih perlu dicek lebih lanjut.',
            'image' => 'https://cms-website.boga.id/assets/images/PL/Menu/181023031002_Beef_Pepper_Rice.jpg'
        ]);

        Promotion::create([
            'title' => 'Sushi Tei',
            'description' => '
                Sushi Tei adalah restoran Restoran Jepang terkenal dengan menu sushi, sashimi, dan hidangan khas Jepang lainnya yang dibuat dari bahan segar, berkualitas tinggi, dan disajikan dalam suasana elegan dengan harga yang terjangkau bagi pecinta kuliner Jepang',
            'image' => 'https://www.kemangvillage.co.id/wp-content/uploads/2018/01/Nikmati-Makanan-Jepang-Di-Sushi-Tei-Kemang-Village.jpg'
        ]);

        Promotion::create([
            'title' => 'Yamagoya Ramen',
            'description' => '
                Yamagoya Ramen adalah restoran ramen asal Jepang yang menyajikan ramen autentik dengan kuah tonkotsu khas Fukuoka. Menu favoritnya termasuk Black Garlic Ramen yang kaya rasa, serta berbagai pilihan ramen dengan tingkat kepedasan yang bisa disesuaikan.',
            'image' => 'https://lh3.googleusercontent.com/p/AF1QipMwMzfGekm9zzMb5gx8xbz4uJDcOt3FjOFeCRMW=s1360-w1360-h1020'
        ]);

        Promotion::create([
            'title' => 'XO Suki',
            'description' => '
                X.O Suki adalah restoran sukiyaki dan hotpot yang menyajikan pilihan daging premium, seafood segar, dan sayuran berkualitas. Dilengkapi dengan berbagai jenis kuah lezat serta saus khas yang bisa disesuaikan dengan selera pelanggan, termasuk menu dim sum sebagai pelengkap.',
            'image' => 'https://lh3.googleusercontent.com/gps-cs-s/AB5caB-MCHHnbY7Vk0FxT1y-ev3lmGB_RqZHkvRedrCDp3ABU7wc40Fg5lt-8VdWyQd7X-0SdqxNHinja9Wb2yV8x2SoQJPJTnJuCOp6l9znRhBQfW5od-QwRzNTz-MBmtUCIl1FllD5=s1360-w1360-h1020'
        ]);
    }
}
// 'title' => 'McDonald's',
// 'description' => 'McDonald's adalah jaringan restoran cepat saji global yang terkenal dengan berbagai menu ikonik seperti Big Mac, McNuggets, dan kentang goreng renyah. McDonald's juga menawarkan variasi menu yang disesuaikan dengan selera lokal di setiap negara.
// 'image' => 'https://cdn.idntimes.com/content-images/community/2023/03/img-20230319-211916-54d33970c0f6c84022d1c6917fe4fe7f-185077b198cc47eca8644fb81c9aca91.jpg'