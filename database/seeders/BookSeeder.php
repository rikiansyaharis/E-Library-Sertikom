<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::insert([
            [
                'id' => 001,
                'genre_id' => 102,
                'image' => 'Tia.jpg',
                'name' => 'Tia',
                'author' => 'kembangmanggis',
                'number_of_pages' => '427',
                'publication_years' => 2012,
                'description' => 'Tia, seorang gadis SMA kelas dua, menatap kehidupan dengan penuh ironi. Kedewasaan adalah penghapusan sekian banyak kenikmatan hidup, begitu selalu pendapatnya. Namun tentu saja dia tidak dapat menahan perputaran dunia. Hukum alam berlaku pada setiap manusia, termasuk Tia, yang sejak awal tegas-tegas menolaknya. Di saat dia tengah memasuki arti kedewasaan itu sendiri, Tia sama sekali tidak menyadarinya. Alam telah menjeratnya dengan amat halus, mengantar gadis itu ke dunia barunya tanpa penolakan lagi. Tia kini telah siap menyongsong fajar dengan mata dan hati terbuka. Dia berhasil menembus pintu kedewasaan itu lewat uluran tangan gaib yang menolongnya. Apa lagi kalau bukan tangan-tangan gaib cinta?',
                'count_views' => 50,
                'file' => 'Bumi Tere Liye z-lib.pdf',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 002,
                'genre_id' => 101,
                'image' => 'kisah-tanah-jawa.jpg',
                'name' => 'Kisah Tanah Jawa',
                'author' => '@kisahtanahjawa',
                'number_of_pages' => '250',
                'publication_years' => 2012,
                'description' => 'Tanah Jawa menyimpan banyak kisah misteri yang takkan habis diceritakan dalam semalam. Sosok misterius, ritual mistis, dan tempat angker, selalu membuat kita penasaran. Buku Kisah Tanah Jawa mengajak pembaca membuka selubung mitos dan mistis yang selama ini hanya menjadi ksak-kusuk di masyarakat',
                'count_views' => 200,
                'file' => 'DILAN 1 (shabrinabachtiar).pdf',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 003,
                'genre_id' => 103,
                'image' => 'kisah-tanah-jawa.jpg',
                'name' => 'Kisah Tanah Jawa',
                'author' => '@kisahtanahjawa',
                'number_of_pages' => '250',
                'publication_years' => 2012,
                'description' => 'Tanah Jawa menyimpan banyak kisah misteri yang takkan habis diceritakan dalam semalam. Sosok misterius, ritual mistis, dan tempat angker, selalu membuat kita penasaran. Buku Kisah Tanah Jawa mengajak pembaca membuka selubung mitos dan mistis yang selama ini hanya menjadi ksak-kusuk di masyarakat',
                'count_views' => 20,
                'file' => 'DILAN 2 (shabrinabachtiar).pdf',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 004,
                'genre_id' => 104,
                'image' => 'Hyderabad.jpg',
                'name' => 'Hyderabad',
                'author' => 'Irvan Karquza',
                'number_of_pages' => '172',
                'publication_years' => 2012,
                'description' => 'Pedih, terpaksa aku berpamit dari rumah. Menuju tempat baru yang masih tereka dalam imajinasi. Salah satu hal yang mendasar bagiku merantau adalah, enam orang anak Ibu, tidak satu pun yang kuliah. Bukan tanpa alasan. Karena Penghasilan Ayah yang rendah, pendidikan yang tak sampai, serta relasi yang terbatas. Membuatku ingin mengubah keadaan keluarga ini.Ibuku tidak banyak bicara, tapi ku tahu dia banyak menangis dalam doa.  Setiap aku berdoa aku juga membayangkan wajahnya, air mataku tumpah. Aku katakan “Aku akan membanggakanmu Ibu.”Entah berapa lama lagi aku akan pulang ke kampung halaman. Ibu memberiku uang yang di pinjamnya dari tetangga.“Bismillahi tawakkaltu Allallahi Walahaula Walaquata Ilabillah”. “ Aku berangkat Bu.” Aku melihat senyum itu tersungging di bibirnya.',
                'count_views' => 20,
                'file' => 'DILAN 3 (shabrinabachtiar).pdf',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 005,
                'genre_id' => 104,
                'name' => 'Mindset',
                'author' => 'Irvan Karquza',
                'number_of_pages' => '172',
                'publication_years' => 2012,
                'description' => 'Paparan tentang kesuksesan dalam buku ini sangat mendasar dan langka.Lazimnya, buku-buku tentang kesuksesan lebih menawarkan sisi-sisipraktis. Tetapi, buku ini justru mengajak Anda menggarap inti masalahkesuksesan: pikiran. Tak hanya itu, buku ini mengontraskan dengan apiktokoh-tokoh duniadi bidang musik, sastra, sains, olahraga, dan bisnisyang berpola pikir tetap (fixed mindset) dan berpola pikir berkembang (growth mindset). Ternyata, tokoh yang berpola pikir berkembang lebih mampu mempertahankan kesuksesan dan kegembiraan hidup.',
                'count_views' => 20,
                'file' => 'Laut Bercerita (Leila S. Chudori) (z-lib.org).pdf',
                'image' => 'Mindset.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
