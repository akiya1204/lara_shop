<?php

use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // DB::table('テーブル名')->insert([
    //      [
    //          'カラム名' => 入れたい値,
    //          'カラム名' => 入れたい値,
    //      ],
    //      [
    //          'カラム名' => 入れたい値,
    //          'カラム名' => 入れたい値,
    //      ],
    // ]);

    public function run()
    {
        DB::table('items')->insert([
            [
                'item_id' => 1,
                'item_name' => 'たまねぎ',
                'detail' => '染色体数は2n=16。生育適温は20℃前後で、寒さには強く氷点下でも凍害はほとんど見られないが、25℃以上の高温では生育障害が起こる。',
                'price' => 100,
                'image' => 'tamanegi.jpg',
                'ctg_id' => 1,
            ],
            [
                'item_id' => 2,
                'item_name' => 'にんじん',
                'detail' => '細長い東洋系品種と、太く短い西洋系品種の2種類に大別され、ともに古くから薬や食用としての栽培が行われてきた。',
                'price' => 150,
                'image' => 'ninjin.jpg',
                'ctg_id' => 1,
            ],
            [
                'item_id' => 3,
                'item_name' => 'ピーマン',
                'detail' => 'ピーマン自体はトウガラシの品種の一つであり、果実は肉厚でカプサイシンを含まない。',
                'price' => 50,
                'image' => 'pi-man.jpg',
                'ctg_id' => 1,
            ],
            [
                'item_id' => 4,
                'item_name' => 'なす',
                'detail' => '世界の各地で独自の品種が育てられている。加賀茄子などの一部例外もあるが日本においては南方ほど長実または大長実で、北方ほど小実品種となる。',
                'price' => 120,
                'image' => 'nasu.jpg',
                'ctg_id' => 1,
            ],
            [
                'item_id' => 5,
                'item_name' => 'みかん',
                'detail' => '日本の代表的な果物で、バナナのように、素手で容易に果皮をむいて食べることができるため、冬になれば炬燵の上にミカンという光景が一般家庭に多く見られる。',
                'price' => 30,
                'image' => 'mikan.jpg',
                'ctg_id' => 2,
            ],
            [
                'item_id' => 6,
                'item_name' => 'りんご',
                'detail' => '現在日本で栽培されているものは、明治時代以降に導入されたもの。病害抵抗性、食味、収量などの点から品種改良が加えられる。',
                'price' => 100,
                'image' => 'ringo.jpg',
                'ctg_id' => 2,
            ],
            [
                'item_id' => 7,
                'item_name' => 'ぶどう',
                'detail' => '葉は両側に切れ込みのある15 - 20cmほどの大きさで、穂状の花をつける。',
                'price' => 130,
                'image' => 'budou.jpg',
                'ctg_id' => 2,
            ],
            [
                'item_id' => 8,
                'item_name' => 'いちご',
                'detail' => 'イチゴとして流通しているものは、ほぼ全てオランダイチゴである。s',
                'price' => 250,
                'image' => 'ichigo.jpg',
                'ctg_id' => 2,
            ],
            [
                'item_id' => 9,
                'item_name' => 'コーラ',
                'detail' => '複数あるコーラ飲料製造社ではこれらの香味料以外にその会社独自の香味料を加えることで独自の製品として開発している。',
                'price' => 120,
                'image' => 'cola.jpg',
                'ctg_id' => 3,
            ],
            [
                'item_id' => 10,
                'item_name' => 'カルピス',
                'detail' => '企業としてのカルピスの創業者は、僧侶出身の三島海雲。創業初期は国分グループだった。',
                'price' => 120,
                'image' => 'karupisu.jpg',
                'ctg_id' => 3,
            ],
            [
                'item_id' => 11,
                'item_name' => 'ウーロン茶',
                'detail' => '烏龍茶（ウーロンちゃ）は、中国茶のうち青茶（せいちゃ、あおちゃ）と分類され、茶葉を発酵途中で加熱して発酵を止め、半発酵させた茶である。',
                'price' => 110,
                'image' => 'u-rontya.jpg',
                'ctg_id' => 3,
            ],
            [
                'item_id' => 12,
                'item_name' => 'ミネラルウォーター',
                'detail' => 'ミネラルウォーター（Mineral water）とは、容器入り飲料水のうち、地下水を原水とするものを言う。',
                'price' => 100,
                'image' => 'water.jpg',
                'ctg_id' => 3,
            ],
        ]);
    }
}
