<?php

namespace Database\Seeders;

use App\Models\GameType;
use App\Models\Provider;
use App\Models\ProviderCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameTypeProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provider1 = Provider::find(1); //ASIAGAMING
        $provider1->gameTypes()->sync([4, 5, 10,11]);

        $provider2 = Provider::find(2); //BBIN
        $provider2->gameTypes()->sync([1,4,5,6,11]);

        $provider3 = Provider::find(3); //JOKER
        $provider3->gameTypes()->sync([1,4,11]);

        $provider4 = Provider::find(4); //KING855
        $provider4->gameTypes()->sync(5);

        $provider5 = Provider::find(5); //PGSOFT
        $provider5->gameTypes()->sync(11);

        $provider6 = Provider::find(6); //PRAGMATIC
        $provider6->gameTypes()->sync([2,5,11]);

        $provider7 = Provider::find(7); //KING MAKER
        $provider7->gameTypes()->sync(11);

        $provider8 = Provider::find(8); //SBO
        $provider8->gameTypes()->sync([1,10]);

        [
        [
        "gameId": "1",
        "gameName": "Honey Trap of Diao Chan",
        "gameCode": "diaochan",

      ]
        {
        "gameId": "2",
        "gameName": "Gem Saviour",
        "gameCode": "gem-saviour",

        },
        {
        "gameId": "3",
        "gameName": "Fortune Gods",
        "gameCode": "fortune-gods",

        },
        {
        "gameId": "6",
        "gameName": "Medusa 2: The Quest of Perseus",
        "gameCode": "medusa2",

        },
        {
        "gameId": "7",
        "gameName": "Medusa 1: The Curse of Athena",
        "gameCode": "medusa",

        },
        {
        "gameId": "17",
        "gameName": "Wizdom Wonders",
        "gameCode": "wizdom-wonders",
        "status": 0,
        "releaseStatus": 1
        },
        {
        "gameId": "18",
        "gameName": "Hood vs Wolf",
        "gameCode": "hood-wolf",

        },
        {
        "gameId": "20",
        "gameName": "Reel Love",
        "gameCode": "reel-love",

        },
        {
        "gameId": "24",
        "gameName": "Win Win Won",
        "gameCode": "win-win-won",

        },
        {
        "gameId": "25",
        "gameName": "Plushie Frenzy",
        "gameCode": "plushie-frenzy",

        },
        {
        "gameId": "26",
        "gameName": "Tree of Fortune",
        "gameCode": "fortune-tree",

        },
        {
        "gameId": "28",
        "gameName": "Hotpot",
        "gameCode": "hotpot",

        },
        {
        "gameId": "29",
        "gameName": "Dragon Legend",
        "gameCode": "dragon-legend",

        },
        {
        "gameId": "31",
        "gameName": "Baccarat Deluxe",
        "gameCode": "baccarat-deluxe",

        },
        {
        "gameId": "33",
        "gameName": "Hip Hop Panda",
        "gameCode": "hip-hop-panda",

        },
        {
        "gameId": "34",
        "gameName": "Legend of Hou Yi",
        "gameCode": "legend-of-hou-yi",

        },
        {
        "gameId": "35",
        "gameName": "Mr. Hallow-Win",
        "gameCode": "mr-hallow-win",

        },
        {
        "gameId": "36",
        "gameName": "Prosperity Lion",
        "gameCode": "prosperity-lion",

        },
        {
        "gameId": "37",
        "gameName": "Santa's Gift Rush",
        "gameCode": "santas-gift-rush",

        },
        {
        "gameId": "38",
        "gameName": "Gem Saviour Sword",
        "gameCode": "gem-saviour-sword",

        },
        {
        "gameId": "39",
        "gameName": "Piggy Gold",
        "gameCode": "piggy-gold",

        },
        {
        "gameId": "40",
        "gameName": "Jungle Delight",
        "gameCode": "jungle-delight",

        },
        {
        "gameId": "41",
        "gameName": "Symbols Of Egypt",
        "gameCode": "symbols-of-egypt",

        },
        {
        "gameId": "42",
        "gameName": "Ganesha Gold",
        "gameCode": "ganesha-gold",

        },
        {
        "gameId": "43",
        "gameName": "Three Monkeys",
        "gameCode": "three-monkeys",
        "status": 0,
        "releaseStatus": 1
        },
        {
        "gameId": "44",
        "gameName": "Emperor's Favour",
        "gameCode": "emperors-favour",

        },
        {
        "gameId": "48",
        "gameName": "Double Fortune",
        "gameCode": "double-fortune",

        },
        {
        "gameId": "50",
        "gameName": "Journey to the Wealth",
        "gameCode": "journey-to-the-wealth",

        },
        {
        "gameId": "53",
        "gameName": "The Great Icescape",
        "gameCode": "the-great-icescape",

        },
        {
        "gameId": "54",
        "gameName": "Captain's Bounty",
        "gameCode": "captains-bounty",

        },
        {
        "gameId": "57",
        "gameName": "Dragon Hatch",
        "gameCode": "dragon-hatch",

        },
        {
        "gameId": "58",
        "gameName": "Vampire's Charm",
        "gameCode": "vampires-charm",

        },
        {
        "gameId": "59",
        "gameName": "Ninja vs Samurai",
        "gameCode": "ninja-vs-samurai",

        },
        {
        "gameId": "60",
        "gameName": "Leprechaun Riches",
        "gameCode": "leprechaun-riches",

        },
        {
        "gameId": "61",
        "gameName": "Flirting Scholar",
        "gameCode": "flirting-scholar",

        },
        {
        "gameId": "62",
        "gameName": "Gem Saviour Conquest",
        "gameCode": "gem-saviour-conquest",

        },
        {
        "gameId": "63",
        "gameName": "Dragon Tiger Luck",
        "gameCode": "dragon-tiger-luck",

        },
        {
        "gameId": "64",
        "gameName": "Muay Thai Champion",
        "gameCode": "muay-thai-champion",

        },
        {
        "gameId": "65",
        "gameName": "Mahjong Ways",
        "gameCode": "mahjong-ways",

        },
        {
        "gameId": "67",
        "gameName": "Shaolin Soccer",
        "gameCode": "shaolin-soccer",

        },
        {
        "gameId": "68",
        "gameName": "Fortune Mouse",
        "gameCode": "fortune-mouse",

        },
        {
        "gameId": "69",
        "gameName": "Bikini Paradise",
        "gameCode": "bikini-paradise",

        },
        {
        "gameId": "70",
        "gameName": "Candy Burst",
        "gameCode": "candy-burst",

        },
        {
        "gameId": "71",
        "gameName": "CaiShen Wins",
        "gameCode": "cai-shen-wins",

        },
        {
        "gameId": "73",
        "gameName": "Egypt's Book of Mystery",
        "gameCode": "egypts-book-mystery",

        },
        {
        "gameId": "74",
        "gameName": "Mahjong Ways 2",
        "gameCode": "mahjong-ways2",

        },
        {
        "gameId": "75",
        "gameName": "Ganesha Fortune",
        "gameCode": "ganesha-fortune",

        },
        {
        "gameId": "79",
        "gameName": "Dreams of Macau",
        "gameCode": "dreams-of-macau",

        },
        {
        "gameId": "80",
        "gameName": "Circus Delight",
        "gameCode": "circus-delight",

        },
        {
        "gameId": "82",
        "gameName": "Phoenix Rises",
        "gameCode": "phoenix-rises",

        },
        {
        "gameId": "83",
        "gameName": "Wild Fireworks",
        "gameCode": "wild-fireworks",

        },
        {
        "gameId": "84",
        "gameName": "Queen of Bounty",
        "gameCode": "queen-bounty",

        },
        {
        "gameId": "85",
        "gameName": "Genie's 3 Wishes",
        "gameCode": "genies-wishes",

        },
        {
        "gameId": "86",
        "gameName": "Galactic Gems",
        "gameCode": "galactic-gems",

        },
        {
        "gameId": "87",
        "gameName": "Treasures of Aztec",
        "gameCode": "treasures-aztec",

        },
        {
        "gameId": "88",
        "gameName": "Jewels of Prosperity",
        "gameCode": "jewels-prosper",

        },
        {
        "gameId": "89",
        "gameName": "Lucky Neko",
        "gameCode": "lucky-neko",

        },
        {
        "gameId": "90",
        "gameName": "Secrets of Cleopatra",
        "gameCode": "sct-cleopatra",

        },
        {
        "gameId": "91",
        "gameName": "Guardians of Ice & Fire",
        "gameCode": "gdn-ice-fire",

        },
        {
        "gameId": "92",
        "gameName": "Thai River Wonders",
        "gameCode": "thai-river",

        },
        {
        "gameId": "93",
        "gameName": "Opera Dynasty",
        "gameCode": "opera-dynasty",

        },
        {
        "gameId": "94",
        "gameName": "Bali Vacation",
        "gameCode": "bali-vacation",

        },
        {
        "gameId": "95",
        "gameName": "Majestic Treasures",
        "gameCode": "majestic-ts",

        },
        {
        "gameId": "97",
        "gameName": "Jack Frost's Winter",
        "gameCode": "jack-frosts",

        },
        {
        "gameId": "98",
        "gameName": "Fortune Ox",
        "gameCode": "fortune-ox",

        },
        {
        "gameId": "100",
        "gameName": "Candy Bonanza",
        "gameCode": "candy-bonanza",

        },
        {
        "gameId": "101",
        "gameName": "Rise of Apollo",
        "gameCode": "rise-of-apollo",

        },
        {
        "gameId": "102",
        "gameName": "Mermaid Riches",
        "gameCode": "mermaid-riches",

        },
        {
        "gameId": "103",
        "gameName": "Crypto Gold",
        "gameCode": "crypto-gold",

        },
        {
        "gameId": "104",
        "gameName": "Wild Bandito",
        "gameCode": "wild-bandito",

        },
        {
        "gameId": "105",
        "gameName": "Heist Stakes",
        "gameCode": "heist-stakes",

        },
        {
        "gameId": "106",
        "gameName": "Ways of the Qilin",
        "gameCode": "ways-of-qilin",

        },
        {
        "gameId": "107",
        "gameName": "Legendary Monkey King",
        "gameCode": "lgd-monkey-kg",

        },
        {
        "gameId": "108",
        "gameName": "Buffalo Win",
        "gameCode": "buffalo-win",

        },
        {
        "gameId": "109",
        "gameName": "Sushi Oishi",
        "gameCode": "sushi-oishi",
        "status": 0,
        "releaseStatus": 1
        },
        {
        "gameId": "110",
        "gameName": "Jurassic Kingdom",
        "gameCode": "jurassic-kdm",

        },
        {
        "gameId": "111",
        "gameName": "Groundhog Harvest",
        "gameCode": "groundhog",
        "status": 0,
        "releaseStatus": 1
        },
        {
        "gameId": "112",
        "gameName": "Oriental Prosperity",
        "gameCode": "oriental-pros",

        },
        {
        "gameId": "113",
        "gameName": "Raider Jane's Crypt of Fortune",
        "gameCode": "crypt-fortune",

        },
        {
        "gameId": "114",
        "gameName": "Emoji Riches",
        "gameCode": "emoji-riches",

        },
        {
        "gameId": "115",
        "gameName": "Supermarket Spree",
        "gameCode": "sprmkt-spree",

        },
        {
        "gameId": "116",
        "gameName": "Farm Invaders",
        "gameCode": "farm-invaders",
        "status": 0,
        "releaseStatus": 1
        },
        {
        "gameId": "117",
        "gameName": "Cocktail Nights",
        "gameCode": "cocktail-nite",

        },
        {
        "gameId": "118",
        "gameName": "Mask Carnival",
        "gameCode": "mask-carnival",

        },
        {
        "gameId": "119",
        "gameName": "Spirited Wonders",
        "gameCode": "spirit-wonder",

        },
        {
        "gameId": "120",
        "gameName": "The Queen's Banquet",
        "gameCode": "queen-banquet",

        },
        {
        "gameId": "121",
        "gameName": "Destiny of Sun & Moon",
        "gameCode": "dest-sun-moon",

        },
        {
        "gameId": "122",
        "gameName": "Garuda Gems",
        "gameCode": "garuda-gems",

        },
        {
        "gameId": "123",
        "gameName": "Rooster Rumble",
        "gameCode": "rooster-rbl",

        },
        {
        "gameId": "124",
        "gameName": "Battleground Royale",
        "gameCode": "battleground",

        },
        {
        "gameId": "125",
        "gameName": "Butterfly Blossom",
        "gameCode": "btrfly-blossom",

        },
        {
        "gameId": "126",
        "gameName": "Fortune Tiger",
        "gameCode": "fortune-tiger",

        },
        {
        "gameId": "127",
        "gameName": "Speed Winner",
        "gameCode": "speed-winner",

        },
        {
        "gameId": "128",
        "gameName": "Legend of Perseus",
        "gameCode": "legend-perseus",

        },
        {
        "gameId": "129",
        "gameName": "Win Win Fish Prawn Crab",
        "gameCode": "win-win-fpc",

        },
        {
        "gameId": "130",
        "gameName": "Lucky Piggy",
        "gameCode": "lucky-piggy",

        },
        {
        "gameId": "132",
        "gameName": "Wild Coaster",
        "gameCode": "wild-coaster",

        },
        {
        "gameId": "135",
        "gameName": "Wild Bounty Showdown",
        "gameCode": "wild-bounty-sd",

        },
        {
        "gameId": "1312883",
        "gameName": "Prosperity Fortune Tree",
        "gameCode": "prosper-ftree",

        },
        {
        "gameId": "1338274",
        "gameName": "Totem Wonders",
        "gameCode": "totem-wonders",

        },
        {
        "gameId": "1340277",
        "gameName": "Asgardian Rising",
        "gameCode": "asgardian-rs",

        },
        {
        "gameId": "1368367",
        "gameName": "Alchemy Gold",
        "gameCode": "alchemy-gold",

        },
        {
        "gameId": "1372643",
        "gameName": "Diner Delights",
        "gameCode": "diner-delights",

        },
        {
        "gameId": "1381200",
        "gameName": "Hawaiian Tiki",
        "gameCode": "hawaiian-tiki",

        },
        {
        "gameId": "1397455",
        "gameName": "Fruity Candy",
        "gameCode": "fruity-candy",

        },
        {
        "gameId": "1402846",
        "gameName": "Midas Fortune",
        "gameCode": "midas-fortune",

        },
        {
        "gameId": "1418544",
        "gameName": "Bakery Bonanza",
        "gameCode": "bakery-bonanza",

        },
        {
        "gameId": "1420892",
        "gameName": "Rave Party Fever",
        "gameCode": "rave-party-fvr",

        },
        {
        "gameId": "1432733",
        "gameName": "Mystical Spirits",
        "gameCode": "myst-spirits",

        },
        {
        "gameId": "1448762",
        "gameName": "Songkran Splash",
        "gameCode": "songkran-spl",

        },
        {
        "gameId": "1473388",
        "gameName": "Cruise Royale",
        "gameCode": "cruise-royale",

        },
        {
        "gameId": "1489936",
        "gameName": "Ultimate Striker",
        "gameCode": "ult-striker",

        },
        {
        "gameId": "1513328",
        "gameName": "Super Golf Drive",
        "gameCode": "spr-golf-drive",

        },
        {
        "gameId": "1529867",
        "gameName": "Ninja Raccoon Frenzy",
        "gameCode": "ninja-raccoon",

        },
        {
        "gameId": "1543462",
        "gameName": "Fortune Rabbit",
        "gameCode": "fortune-rabbit",

        },
        {
        "gameId": "1555350",
        "gameName": "Forge of Wealth",
        "gameCode": "forge-wealth",

        },
        {
        "gameId": "1568554",
        "gameName": "Wild Heist Cashout",
        "gameCode": "wild-heist-co",

        },
        {
        "gameId": "1572362",
        "gameName": "Gladiator's Glory",
        "gameCode": "gladi-glory",

        },
        {
        "gameId": "1580541",
        "gameName": "Mafia Mayhem",
        "gameCode": "mafia-mayhem",

        },
        {
        "gameId": "1594259",
        "gameName": "Safari Wilds",
        "gameCode": "safari-wilds",

        },
        {
        "gameId": "1601012",
        "gameName": "Lucky Clover Lady",
        "gameCode": "lucky-clover",

        },
        {
        "gameId": "1655268",
        "gameName": "Tsar Treasures",
        "gameCode": "tsar-treasures",

        }
        ]

    }
}
