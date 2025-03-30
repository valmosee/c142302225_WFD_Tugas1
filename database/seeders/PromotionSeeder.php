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
                Gomachi Butadon adalah restoran Jepang yang mengkhususkan diri dalam menyajikan butadon, yaitu hidangan nasi dengan irisan daging babi panggang yang dibumbui dengan saus khas Jepang. Restoran ini dikenal sebagai pelopor butadon autentik di Indonesia.
                Pada Desember 2024, Gomachi Butadon membuka cabang di Pakuwon Mall, Surabaya, yang menandai ekspansinya ke kota tersebut. Dalam rangka pembukaan tersebut, mereka mengadakan promo beli 1 gratis 1 butadon pada 20-22 Desember 2024.
                Menu utama mereka meliputi berbagai ukuran butadon, mulai dari ukuran kecil hingga ekstra besar, serta variasi ramen dan hidangan pendamping seperti gyoza dan salad bayam. Harga menu berkisar antara Rp66.000 hingga Rp227.000 untuk butadon, dan hidangan lainnya dengan harga yang bervariasi. 
                Bagi Anda yang berada di Surabaya dan ingin menikmati hidangan Jepang autentik, Gomachi Butadon di Pakuwon Mall dapat menjadi pilihan yang tepat.',
            'image' => 'https://assets-pergikuliner.com/Hyc2RiezTw5osrvc8P4thCziBmM=/fit-in/1366x768/smart/filters:no_upscale()/https://assets-pergikuliner.com/uploads/image/picture/3185717/picture-1707445807.jpg'
        ]);

        Promotion::create([
            'title' => 'Paper Lunch',
            'description' => '
                Pepper Lunch adalah restoran Jepang yang menawarkan konsep "Do-It-Yourself" dengan menyajikan berbagai menu seperti beef pepper rice, chicken pepper rice, dan salmon pepper rice yang disajikan di atas hot plate sehingga pelanggan dapat memasak sendiri sesuai selera.',
            'image' => 'https://cms-website.boga.id/assets/images/PL/Menu/181023031002_Beef_Pepper_Rice.jpg'
        ]);

        Promotion::create([
            'title' => 'Sushi Tei',
            'description' => '
                Sushi Tei adalah restoran Jepang yang dikenal dengan berbagai pilihan sushi dan sashimi segar, serta menu Jepang lainnya seperti ramen dan donburi.',
            'image' => 'https://www.kemangvillage.co.id/wp-content/uploads/2018/01/Nikmati-Makanan-Jepang-Di-Sushi-Tei-Kemang-Village.jpg'
        ]);

        Promotion::create([
            'title' => 'Yamagoya Ramen',
            'description' => '
                Yamagoya Ramen adalah restoran yang menyajikan ramen dengan cita rasa autentik Jepang. Menu andalannya termasuk pork bone soup ramen dan black garlic ramen.',
            'image' => 'https://lh3.googleusercontent.com/p/AF1QipMwMzfGekm9zzMb5gx8xbz4uJDcOt3FjOFeCRMW=s1360-w1360-h1020'
        ]);

        Promotion::create([
            'title' => 'XO Suki',
            'description' => '
                X.O Suki adalah restoran yang menawarkan berbagai pilihan sukiyaki dan hidangan khas Cina lainnya. Pelanggan dapat memilih berbagai bahan segar untuk dimasak dalam kuah pilihan.',
            'image' => 'https://lh3.googleusercontent.com/gps-cs-s/AB5caB-MCHHnbY7Vk0FxT1y-ev3lmGB_RqZHkvRedrCDp3ABU7wc40Fg5lt-8VdWyQd7X-0SdqxNHinja9Wb2yV8x2SoQJPJTnJuCOp6l9znRhBQfW5od-QwRzNTz-MBmtUCIl1FllD5=s1360-w1360-h1020'
        ]);
    }
}
// 'title' => 'McDonald's',
// 'description' => 'McDonald's adalah jaringan restoran cepat saji internasional yang menyajikan berbagai menu seperti ayam goreng, burger, kentang goreng, dan lainnya.
// 'image' => 'https://cdn.idntimes.com/content-images/community/2023/03/img-20230319-211916-54d33970c0f6c84022d1c6917fe4fe7f-185077b198cc47eca8644fb81c9aca91.jpg'