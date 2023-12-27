<?php

namespace Database\Seeders;

use App\Models\Admin\GameList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PGGameListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //PG
        $data = [
                    [
                    "game_id"=> "1",
                    "name_en"=> "Honey Trap of Diao Chan",
                    "provider_id"=> 5,
                    "game_type_id"=> 10,
                    "image" => "diaochan.jpg"
                    ],
                    [
                    "game_id"=> "2",
                    "name_en"=> "Gem Saviour",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "gem-saviour.jpg"

                    ],
                    [
                    "game_id"=> "3",
                    "name_en"=> "Fortune Gods",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "fortune-gods.jpg"
                    ],
                    [
                    "game_id"=> "6",
                    "name_en"=> "Medusa 2: The Quest of Perseus",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "medusa2.jpg",
                    ],
                    [
                    "game_id"=> "7",
                    "name_en"=> "Medusa 1 : The Curse of Athena",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "medusa.jpg",

                    ],
                    [
                    "game_id"=> "17",
                    "name_en"=> "Wizdom Wonders",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" =>  "wizdom-wonders.jpg",
                    ],
                    [
                    "game_id"=> "18",
                    "name_en"=> "Hood vs Wolf",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "hood-wolf.jpg",
                    ],
                    [
                    "game_id"=> "20",
                    "name_en"=> "Reel Love",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "reel-love.jpg"
                    ],
                    [
                    "game_id"=> "24",
                    "name_en"=> "Win Win Won",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "win-win-won.jpg",
                    ],
                    [
                    "game_id"=> "25",
                    "name_en"=> "Plushie Frenzy",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "plushie-frenzy.jpg",

                    ],
                    [
                    "game_id"=> "26",
                    "name_en"=> "Tree of Fortune",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "fortune-tree.jpg",

                    ],
                    [
                    "game_id"=> "28",
                    "name_en"=> "Hotpot",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image"=> "hotpot.jpg",
                    ],
                    [
                    "game_id"=> "29",
                    "name_en"=> "Dragon Legend",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "dragon-legend.jpg",
                    ],
                    [
                    "game_id"=> "31",
                    "name_en"=> "Baccarat Deluxe",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "baccarat-deluxe.jpg",
                    ],
                    [
                    "game_id"=> "33",
                    "name_en"=> "Hip Hop Panda",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "hip-hop-panda.jpg"
                    ],
                    [
                    "game_id"=> "34",
                    "name_en"=> "Legend of Hou Yi",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "legend-of-hou-yi.jpg",
                    ],
                    [
                    "game_id"=> "35",
                    "name_en"=> "Mr. Hallow-Win",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "mr-hallow-win.jpg",
                    ],
                    [
                    "game_id"=> "36",
                    "name_en"=> "Prosperity Lion",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "prosperity-lion.jpg",
                    ],
                    [
                    "game_id"=> "37",
                    "name_en"=> "Santa's Gift Rush",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "santas-gift-rush.jpg",
                    ],
                    [
                    "game_id"=> "38",
                    "name_en"=> "Gem Saviour Sword",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "gem-saviour-sword.jpg",

                    ],
                    [
                    "game_id"=> "39",
                    "name_en"=> "Piggy Gold",
                    "gameCode"=> "piggy-gold",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "piggy-gold.jpg",

                    ],
                    [
                    "game_id"=> "40",
                    "name_en"=> "Jungle Delight",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" =>"jungle-delight.jpg",
                    ],
                    [
                    "game_id"=> "41",
                    "name_en"=> "Symbols Of Egypt",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "symbols-of-egypt.jpg",
                    ],
                    [
                    "game_id"=> "42",
                    "name_en"=> "Ganesha Gold",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "ganesha-gold.jpg",
                    ],
                    [
                    "game_id"=> "43",
                    "name_en"=> "Three Monkeys",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "three-monkeys.jpg",
                    ],
                    [
                    "game_id"=> "44",
                    "name_en"=> "Emperor's Favour",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "emperors-favour.jpg",
                    ],
                    [
                    "game_id"=> "48",
                    "name_en"=> "Double Fortune",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "double-fortune.jpg",
                    ],
                    [
                    "game_id"=> "50",
                    "name_en"=> "Journey to the Wealth",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" =>"journey-to-the-wealth.jpg",

                    ],
                    [
                    "game_id"=> "53",
                    "name_en"=> "The Great Icescape",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "the-great-icescape.jpg",

                    ],
                    [
                    "game_id"=> "54",
                    "name_en"=> "Captain's Bounty",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "captains-bounty.jpg",
                    ],
                    [
                    "game_id"=> "57",
                    "name_en"=> "Dragon Hatch",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "dragon-hatch.jpg",
                    ],
                    [
                    "game_id"=> "58",
                    "name_en"=> "Vampire's Charm",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "vampires-charm.jpg",
                    ],
                    [
                    "game_id"=> "59",
                    "name_en"=> "Ninja vs Samurai",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "ninja-vs-samurai.jpg",
                    ],
                    [
                    "game_id"=> "60",
                    "name_en"=> "Leprechaun Riches",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "leprechaun-riches.jpg",

                    ],
                    [
                    "game_id"=> "61",
                    "name_en"=> "Flirting Scholar",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "flirting-scholar.jpg",
                    ],
                    [
                    "game_id"=> "62",
                    "name_en"=> "Gem Saviour Conquest",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "gem-saviour-conquest.jpg",
                    ],
                    [
                    "game_id"=> "63",
                    "name_en"=> "Dragon Tiger Luck",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "dragon-tiger-luck.jpg",

                    ],
                    [
                    "game_id"=> "64",
                    "name_en"=> "Muay Thai Champion",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "muay-thai-champion.jpg",
                    ],
                    [
                    "game_id"=> "65",
                    "name_en"=> "Mahjong Ways",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "mahjong-ways.jpg",
                    ],
                    [
                    "game_id"=> "67",
                    "name_en"=> "Shaolin Soccer",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "shaolin-soccer.jpg",

                    ],
                    [
                    "game_id"=> "68",
                    "name_en"=> "Fortune Mouse",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "fortune-mouse.jpg",
                    ],
                    [
                    "game_id"=> "69",
                    "name_en"=> "Bikini Paradise",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "bikini-paradise.jpg",

                    ],
                    [
                    "game_id"=> "70",
                    "name_en"=> "Candy Burst",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "candy-burst.jpg",
                    ],
                    [
                    "game_id"=> "71",
                    "name_en"=> "CaiShen Wins",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "cai-shen-wins.jpg",

                    ],
                    [
                    "game_id"=> "73",
                    "name_en"=> "Egypt's Book of Mystery",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "egypts-book-mystery.jpg",
                    ],
                    [
                    "game_id"=> "74",
                    "name_en"=> "Mahjong Ways 2",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "mahjong-ways2.jpg",

                    ],
                    [
                    "game_id"=> "75",
                    "name_en"=> "Ganesha Fortune",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "ganesha-fortune.jpg",

                    ],
                    [
                    "game_id"=> "79",
                    "name_en"=> "Dreams of Macau",
                    "provider_id"=> 5,
                   "game_type_id"=> 10,
                    "image" => "dreams-of-macau.jpg",

                    ],
                    [
                    "game_id"=> "80",
                    "name_en"=> "Circus Delight",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "circus-delight.jpg",

                    ],
                    [
                    "game_id"=> "82",
                    "name_en"=> "Phoenix Rises",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "phoenix-rises.jpg",
                    ],
                    [
                    "game_id"=> "83",
                    "name_en"=> "Wild Fireworks",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "wild-fireworks.jpg",

                    ],
                    [
                    "game_id"=> "84",
                    "name_en"=> "Queen of Bounty",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "queen-bounty.jpg",
                    ],
                    [
                    "game_id"=> "85",
                    "name_en"=> "Genie's 3 Wishes",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" =>"genies-wishes.jpg",

                    ],
                    [
                    "game_id"=> "86",
                    "name_en"=> "Galactic Gems",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "galactic-gems.jpg",

                    ],
                    [
                    "game_id"=> "87",
                    "name_en"=> "Treasures of Aztec",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "treasures-aztec.jpg",

                    ],
                    [
                    "game_id"=> "88",
                    "name_en"=> "Jewels of Prosperity",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "jewels-prosper.jpg",

                    ],
                    [
                    "game_id"=> "89",
                    "name_en"=> "Lucky Neko",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "lucky-neko.jpg",

                    ],
                    [
                    "game_id"=> "90",
                    "name_en"=> "Secrets of Cleopatra",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "sct-cleopatra.jpg",
                    ],
                    [
                    "game_id"=> "91",
                    "name_en"=> "Guardians of Ice & Fire",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "gdn-ice-fire.jpg",

                    ],
                    [
                    "game_id"=> "92",
                    "name_en"=> "Thai River Wonders",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" =>  "thai-river.jpg",

                    ],
                    [
                    "game_id"=> "93",
                    "name_en"=> "Opera Dynasty",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "opera-dynasty.jpg",
                    ],
                    [
                    "game_id"=> "94",
                    "name_en"=> "Bali Vacation",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "bali-vacation.jpg",
                    ],
                    [
                    "game_id"=> "95",
                    "name_en"=> "Majestic Treasures",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "majestic-ts.jpg",
                    ],
                    [
                    "game_id"=> "97",
                    "name_en"=> "Jack Frost's Winter",
                    "gameCode"=> "jack-frosts",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" =>"jack-frosts.jpg",
                    ],
                    [
                    "game_id"=> "98",
                    "name_en"=> "Fortune Ox",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "fortune-ox.jpg",

                    ],
                    [
                    "game_id"=> "100",
                    "name_en"=> "Candy Bonanza",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "candy-bonanza.jpg",
                    ],
                    [
                    "game_id"=> "101",
                    "name_en"=> "Rise of Apollo",
                    "gameCode"=> "rise-of-apollo",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "rise-of-apollo.jpg",

                    ],
                    [
                    "game_id"=> "102",
                    "name_en"=> "Mermaid Riches",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "mermaid-riches.jpg",
                    ],
                    [
                    "game_id"=> "103",
                    "name_en"=> "Crypto Gold",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "crypto-gold.jpg",
                    ],
                    [
                    "game_id"=> "104",
                    "name_en"=> "Wild Bandito",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "wild-bandito.jpg",
                    ],
                    [
                    "game_id"=> "105",
                    "name_en"=> "Heist Stakes",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "heist-stakes.jpg",
                    ],
                    [
                    "game_id"=> "106",
                    "name_en"=> "Ways of the Qilin",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "ways-of-qilin.jpg",

                    ],
                    [
                    "game_id"=> "107",
                    "name_en"=> "Legendary Monkey King",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "lgd-monkey-kg.jpg",
                    ],
                    [
                    "game_id"=> "108",
                    "name_en"=> "Buffalo Win",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "buffalo-win.jpg",

                    ],
                    [
                    "game_id"=> "109",
                    "name_en"=> "Sushi Oishi",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "sushi-oishi.jpg",

                    ],
                    [
                    "game_id"=> "110",
                    "name_en"=> "Jurassic Kingdom",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "jurassic-kdm.jpg",

                    ],
                    [
                    "game_id"=> "111",
                    "name_en"=> "Groundhog Harvest",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" =>"groundhog.jpg",
                    ],
                    [
                    "game_id"=> "112",
                    "name_en"=> "Oriental Prosperity",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" =>"oriental-pros.jpg",
                    ],
                    [
                    "game_id"=> "113",
                    "name_en"=> "Raider Jane's Crypt of Fortune",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "crypt-fortune.jpg",

                    ],
                    [
                    "game_id"=> "114",
                    "name_en"=> "Emoji Riches",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "emoji-riches.jpg",
                    ],
                    [
                    "game_id"=> "115",
                    "name_en"=> "Supermarket Spree",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "sprmkt-spree.jpg",

                    ],
                    [
                    "game_id"=> "116",
                    "name_en"=> "Farm Invaders",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "farm-invaders.jpg",

                    ],
                    [
                    "game_id"=> "117",
                    "name_en"=> "Cocktail Nights",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "cocktail-nite.jpg",
                    ],
                    [
                    "game_id"=> "118",
                    "name_en"=> "Mask Carnival",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "mask-carnival.jpg",
                    ],
                    [
                    "game_id"=> "119",
                    "name_en"=> "Spirited Wonders",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "spirit-wonder.jpg",

                    ],
                    [
                    "game_id"=> "120",
                    "name_en"=> "The Queen's Banquet",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" =>"queen-banquet.jpg",

                    ],
                    [
                    "game_id"=> "121",
                    "name_en"=> "Destiny of Sun & Moon",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "dest-sun-moon.jpg",

                    ],
                    [
                    "game_id"=> "122",
                    "name_en"=> "Garuda Gems",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "garuda-gems.jpg",

                    ],
                    [
                    "game_id"=> "123",
                    "name_en"=> "Rooster Rumble",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "rooster-rbl.jpg",

                    ],
                    [
                    "game_id"=> "124",
                    "name_en"=> "Battleground Royale",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "battleground.jpg",

                    ],
                    [
                    "game_id"=> "125",
                    "name_en"=> "Butterfly Blossom",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "btrfly-blossom.jpg",

                    ],
                    [
                    "game_id"=> "126",
                    "name_en"=> "Fortune Tiger",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "fortune-tiger.jpg",
                    ],
                    [
                    "game_id"=> "127",
                    "name_en"=> "Speed Winner",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "speed-winner.jpg",

                    ],
                    [
                    "game_id"=> "128",
                    "name_en"=> "Legend of Perseus",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "legend-perseus.jpg",

                    ],
                    [
                    "game_id"=> "129",
                    "name_en"=> "Win Win Fish Prawn Crab",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "win-win-fpc.jpg",

                    ],
                    [
                    "game_id"=> "130",
                    "name_en"=> "Lucky Piggy",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "lucky-piggy.jpg",

                    ],
                    [
                    "game_id"=> "132",
                    "name_en"=> "Wild Coaster",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" =>  "wild-coaster.jpg",

                    ],
                    [
                    "game_id"=> "135",
                    "name_en"=> "Wild Bounty Showdown",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "wild-bounty-sd.jpg",

                    ],
                    [
                    "game_id"=> "1312883",
                    "name_en"=> "Prosperity Fortune Tree",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "prosper-ftree.jpg",

                    ],
                    [
                    "game_id"=> "1338274",
                    "name_en"=> "Totem Wonders",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "totem-wonders.jpg",

                    ],
                    [
                    "game_id"=> "1340277",
                    "name_en"=> "Asgardian Rising",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" =>"asgardian-rs.jpg",

                    ],
                    [
                    "game_id"=> "1368367",
                    "name_en"=> "Alchemy Gold",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "alchemy-gold.jpg",

                    ],
                    [
                    "game_id"=> "1372643",
                    "name_en"=> "Diner Delights",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "diner-delights.jpg",

                    ],
                    [
                    "game_id"=> "1381200",
                    "name_en"=> "Hawaiian Tiki",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "hawaiian-tiki.jpg",

                    ],
                    [
                    "game_id"=> "1397455",
                    "name_en"=> "Fruity Candy",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "fruity-candy.jpg",

                    ],
                    [
                    "game_id"=> "1402846",
                    "name_en"=> "Midas Fortune",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "midas-fortune.jpg",
                    ],
                    [
                    "game_id"=> "1418544",
                    "name_en"=> "Bakery Bonanza",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "bakery-bonanza.jpg",
                    ],
                    [
                    "game_id"=> "1420892",
                    "name_en"=> "Rave Party Fever",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "rave-party-fvr.jpg",

                    ],
                    [
                    "game_id"=> "1432733",
                    "name_en"=> "Mystical Spirits",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "myst-spirits.jpg",

                    ],
                    [
                    "game_id"=> "1448762",
                    "name_en"=> "Songkran Splash",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "songkran-spl.jpg",
                    ],
                    [
                    "game_id"=> "1473388",
                    "name_en"=> "Cruise Royale",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "cruise-royale.jpg",

                    ],
                    [
                    "game_id"=> "1489936",
                    "name_en"=> "Ultimate Striker",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "ult-striker.jpg",

                    ],
                    [
                    "game_id"=> "1513328",
                    "name_en"=> "Super Golf Drive",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "spr-golf-drive.jpg",

                    ],
                    [
                    "game_id"=> "1529867",
                    "name_en"=> "Ninja Raccoon Frenzy",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "ninja-raccoon.jpg",

                    ],
                    [
                    "game_id"=> "1543462",
                    "name_en"=> "Fortune Rabbit",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "fortune-rabbit.jpg",

                    ],
                    [
                    "game_id"=> "1555350",
                    "name_en"=> "Forge of Wealth",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" =>  "forge-wealth.jpg",

                    ],
                    [
                    "game_id"=> "1568554",
                    "name_en"=> "Wild Heist Cashout",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "wild-heist-co.jpg",

                    ],
                    [
                    "game_id"=> "1572362",
                    "name_en"=> "Gladiator's Glory",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "gladi-glory.jpg",
                    ],
                    [
                    "game_id"=> "1580541",
                    "name_en"=> "Mafia Mayhem",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "mafia-mayhem.jpg",
                    ],
                    [
                    "game_id"=> "1594259",
                    "name_en"=> "Safari Wilds",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "safari-wilds.jpg",
                    ],
                    [
                    "game_id"=> "1601012",
                    "name_en"=> "Lucky Clover Lady",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "lucky-clover.jpg",

                    ],
                    [
                    "game_id"=> "1655268",
                    "name_en"=> "Tsar Treasures",
                    "provider_id"=> 5,

                    "game_type_id"=> 10,
                    "image" => "tsar-treasures.jpg",

                    ]
            ];

            foreach($data as $value)
            {

               GameList::create([
                   'game_id' => $value['game_id'],
                   'provider_id' => $value['provider_id'],
                   'game_type_id' => $value['game_type_id'],
                   'name_en' => $value['name_en'],
                   'image' => $value['image']
               ]);
            }
    }
}
