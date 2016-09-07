<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ArticleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('article')->delete();
        
        \DB::table('article')->insert(array (
            0 => 
            array (
                'id' => 7,
                'uid' => 11,
                'text' => 'When LG unveiled its hardy V10 last year, it was... well, it was a little weird. With a beefy body, a double-selfie camera and a tiny second screen, the V10 was the result of LG being a little weird. Lo and behold, the phone did surprisingly well around here. Then the G5 happened. Being the first modular smartphone to sell at massive scale, the G5 represented LG fully embracing that weirdness. It was also gutsy, ambitious and ultimately disappointing -- the company even admitted the device "failed to generate sales" after replacing some high-level mobile execs. Ouch. Now, though, LG has revealed the V20, and it might succeed where the G5 failed because it isn\'t nearly as imaginative.

Put another way, the V20 is not modular. The leaked renders that made the rounds before today were spot on, but people (including us) misinterpreted what that button on the phone\'s right side was. It\'s for popping V20\'s metal back plate off so you can swap out its 3,200mAh. It\'s a lot like opening a powder compact, an analogy LG couldn\'t get enough of.

The V20\'s foundation is mostly the same high-powered stuff we got with the G5 -- there\'s the usual Snapdragon 820 and 4GB of RAM, not to mention the same two-camera setup that pairs an 8-megapixel wide-angle sensor and a 16-megapixel standard sensor around back. LG also decided to release the V20 with a 5.7-inch Quad HD screen, 64GB of storage (up from the G5\'s 32GB) and a shiny new build of Android 7.0 Nougat, all squeezed into a sturdy, aluminum alloy frame. Two potential issues right off the bat: the phone\'s removable back means it can\'t be waterproof, and its face is highly reminiscent of the BlackBerry Z10. Surely LG could have drawn inspiration from a more successful phone. Still, the V20 feels much, much more premium than the G5 did.

So, what else is new here? Well, the second, smaller display picked up a few new features along the way, the like the ability to display longer signatures. The screen itself is also brighter than the V10\'s, and you can enlarge notifications that roll in, but there\'s a good chance you won\'t love it now if you didn\'t before. On the software side, the V20 is the first Nougat phone with the ability to search deep in apps you\'ve installed instead of just pre-loaded Google apps. It\'s one of those things that should\'ve been part of core Android for a while now -- too bad LG announced the feature after we played with the phone.



Beyond that, there are a lot of audio and video improvements. LG updated its Steady Record feature to make on-the-go footage come out much crisper, thanks in large part to Qualcomm\'s gyro-based electronic stabilization. The phone\'s dual camera array is also helped by three forms of autofocus -- laser, phase detection and contrast -- to identify targets even faster in both photos and video. Video effects that ape traditional film and some impressive Hi-Fi audio recording chops make it clear the V20 is trying to be a real production powerhouse.

And while you had to buy extra hardware to coax the G5 into playing high-quality audio -- hardware that wasn\'t even available everywhere -- the V20 does it just fine out of the box. LG representatives didn\'t go into a ton of detail about how the V20\'s "Quad" DAC works, short of mentioning how it cranks up volume, minimizes distortion and supports lossless music files. Still, the effect was clear: I tried running some tracks downloaded from the Google Play Store through the V20 and a pair of someone else\'s expensive Audeze headphones and the difference in volume and punchiness was a pleasant surprise.

As first impressions go, the V20 leaves a pretty good one. It\'s a solidly-built device that took parts of what made the G5 special and mashed it up with features that improve things people do every day. At the same time, it feels as though every decision LG made here was the safe choice. That\'s not necessarily a bad thing. It\'s true that Innovative products -- even ones that, like the G5, weren\'t properly polished -- influence our expectations for the future. In the meantime, though, safe bets can still pay off big, and LG has done some good work here. Stay tuned for our full review soon.',
                'img' => '1473234686804',
                'created_at' => '2016-09-07 07:51:27',
                'updated_at' => '2016-09-07 07:51:27',
                'title' => 'LG\'s new V20 wants to be the all-in-one flagship the G5 wasn\'t',
            ),
            1 => 
            array (
                'id' => 8,
                'uid' => 11,
                'text' => 'Google\'s Safe Browsing initiative already prevents you from accessing shady websites, among other things. Now, the initiative is also making it easier for your favorite online destinations to combat various security issues as soon as they hit. The Safe Browsing console has expanded its Security Issues report to provide website owners with more context and detailed explanations about a particular security problem it finds. That could be any of the six types it can detect, including malware, deceptive pages, and harmful or uncommon downloads.

Besides the detailed reports, the Safe Browsing console now also recommends different courses of action website owners can take, along with sample URLs they can use to unearth the source of the problem. These new features could help website developers fight off hackers and address potential security breaches as soon as possible, which can keep you and your information safe in turn.

The team\'s announcement post comes with a call to register for developers who haven\'t taken advantage of Safe Browsing yet:

"We on the Safe Browsing team definitely recommend registering your site in Search Console even if it is not currently experiencing a security issue. We send notifications through Search Console so webmasters can address any issues that appear as quickly as possible."',
                'img' => '14732347492272',
                'created_at' => '2016-09-07 07:52:30',
                'updated_at' => '2016-09-07 07:52:30',
                'title' => 'Google helps your favorite websites fight hackers',
            ),
            2 => 
            array (
                'id' => 9,
                'uid' => 11,
                'text' => 'GE has so far invested around $1.5 billion in 3D printing tech over the past six years, and its planned acquisition of Germany\'s SLM Solutions Group and Sweden\'s Arcam would only bolster its position in the business. At a combined cost of $1.4 billion, both companies offer an expansion of GE\'s additive manufacturing efforts, which is, as GE chairman Jeffrey R. Immelt explains, "part of GE\'s evolution into a digital industrial company."

If the acquisitions go through, both companies would end up under David L. Joyce, chief executive and president of GE Aviation, with both facilities from Arcam and SLM retaining their own management and employees. Though the pricing breakdown for both companies wasn\'t yet made public by GE, the company had offered about $33.26 (285 Swedish kronor) a share for the company, with about $42.40 for SLM Solutions.',
                'img' => '14732348012822',
                'created_at' => '2016-09-07 07:53:22',
                'updated_at' => '2016-09-07 07:53:22',
                'title' => 'GE puts up $1.4 billion to acquire two 3D printing firms',
            ),
            3 => 
            array (
                'id' => 10,
                'uid' => 11,
                'text' => 'image we\'re all familiar with: that one with a view of its equator, bands and the Great Red Spot. That\'s why the photos above and below the fold might look like an alien world, when in reality, they\'re snapshots of the gas giant from a different angle. NASA\'s Juno spacecraft captured the planet\'s north polar region on cam two hours before its closest approach in late August. It was 120,000 miles away when the JunoCam took these pics, but it got as close as 2,600 miles above Jupiter\'s surface. The last time we caught a glimpse of the gas giant\'s polar region was back in 1974 when the Pioneer 11 probe passed by.

Besides sending back new images of the planet, Juno has also beamed back radio emissions associated with its dramatic auroras. NASA had to shift the emissions\' audio rendition to a lower register since they\'re way above the range our ears can hear.',
                'img' => '1473234851870',
                'created_at' => '2016-09-07 07:54:12',
                'updated_at' => '2016-09-07 07:54:12',
                'title' => 'Juno sends back a rare view of Jupiter\'s north pole',
            ),
            4 => 
            array (
                'id' => 11,
                'uid' => 11,
            'text' => 'Researchers have discovered a possible link between bipolar disorder and certain blood markers. The UK-based longitudinal study (PDF) started when kids were nine years old, examining if the presence of the infection-fighting interleukin-6 (IL-6), C-reactive protein and asthma or eczema had a link to hypomania when the participants were 22 years old. Turns out that higher levels of IL-6 at childhood are indicative of hypomanic symptoms later in life -- depression and psychosis -- which can lead to bipolar disorder.

"Those in the top third of IL-6 at nine years had an increased risk of hypomanic symptoms aged 22 years, compared with those in the bottom third," the research paper says. What\'s more, that association apparently gets stronger when factors like sex, ethnicity and socio-economic status are taken into account. Asthma, eczema and C-reactive protein? None of those showed any relationship to hypomanic symptoms, while IL-6 and hypomania remained constant.

IL-6 itself is naturally produced by the body at times of aerobic exercise, fever, infection and other trauma. New Scientist writes that the chemical can alter how the brain works as well. Specifically, the subgenual cingulate area where anxiety, memory, mood, sleep and self-esteem are governed. Treating those affected areas could help allay the effects of bipolar disorder.',
                'img' => '14732349006525',
                'created_at' => '2016-09-07 07:55:00',
                'updated_at' => '2016-09-07 07:55:00',
                'title' => 'Blood test results could help predict bipolar symptoms',
            ),
            5 => 
            array (
                'id' => 13,
                'uid' => 11,
                'text' => 'No, Apple didn\'t invent the color pink, but it certainly made "rose gold" famous. It all started last year with the company\'s first rose gold iPhones, the 6s and 6s Plus, which quickly inspired other manufacturers to embellish their own devices with identical hues. It\'s no surprise, then, that the IFA 2016 show floor is filled with rose gold gadgets, although some would prefer to be described as "copper" or "luxury pink." Whatever it may be, it\'s become a major trend in the tech world, one that shows no sign of slowing down. With that in mind, take a look at some of the best rose gold gadgets we found in Berlin.

',
                'img' => '14732456297692',
                'created_at' => '2016-09-07 10:53:50',
                'updated_at' => '2016-09-07 10:53:50',
                'title' => 'IFA 2016: The rose gold edition',
            ),
            6 => 
            array (
                'id' => 14,
                'uid' => 11,
                'text' => 'Clubs and Looking for Group features are being rolled out to Preview members on Xbox One today and then the Xbox app on Windows 10, iOS and Android devices in the near future. Both features were originally announced during E3 2016, but now there\'s a chance to actually try them out in the wild.

Clubs are exactly what they sound like: Groups created and managed by players meant to foster a sense of community among anyone getting together to play a certain game. Anyone can create or join different Clubs, and you can create one for nearly anything, such as a group for your inner circle of friends to best each other at Halo or something of that nature.


Club members can coordinate parties, play games, communicate via voice and text chat and share content across the Club together. All Clubs for a specific game will be grouped together in the Game Hub. If you\'ve got a unique name in the hopper for one you want to put together, you\'ll want to go ahead and grab it if you\'re in the Preview because there can only be one with the same name.

Similarly, Looking for Group will assist you in finding someone to play with. You can create your own LFG post with requirements such as the game you need help with, how many people you require, rules, and other types of prerequisites you want to set to make the experience as pleasant as possible. You can browse other LFG requests to see if there\'s anyone you want to join in and assist as well.

In addition to Clubs and Looking for Group becoming available today, the Gamerscore Leaderboard for Xbox One and Windows 10 app has been improved to display results for a 30-day rolling period. Plus, emojis are coming to the Xbox One\'s virtual keyboard. When communicating with Clubs or others in Groups, you can utilize various emojis with a special keyboard of them.

More details on the online tournament Arena will be coming soon, but for now these updates should tide Xbox One owners over with new social options. Now get out there and make some Clubs for us to join.',
                'img' => '14732457536467',
                'created_at' => '2016-09-07 10:55:53',
                'updated_at' => '2016-09-07 10:55:53',
                'title' => 'Xbox One update preview shows off new social features',
            ),
            7 => 
            array (
                'id' => 15,
                'uid' => 11,
                'text' => 'New tracking method adapted to all budgets.
Lost your car and can’t remember where you parked? It happens to the best of us: wandering aimlessly through parking lots, clicking the panic button on your key chain to get your headlights to illuminate.
You don’t need some spendy radio transponder to keep tabs on your car. Uplinking your wheels to the great eye in the sky without breaking the bank is easier than you think.
Standalone GPS and radio triangulation units can cost hundreds. And that’s not counting the installation and (frequently hefty) activation and monthly fees associated with whatever service you do choose. For most of us, it’s overkill.
The good news is that some of life’s biggest problems seem to be disappearing because of new technology.. If you frequently forget where you parked your car, there is a tiny gadget and app that could be what you’re looking for.
What is it about?
It’s about Trackr, A small and discreet device the size of a coin that is revolutionizing the market..
trackr-bravo-4
But… How does it work?
Very easy! It will take less than five minutes to put it to work. You simply have to pair it with your smartphone and download the free application which will allow you to locate it anytime.
Once this is done, you simply have to put it on your key chain, in your wallet or in any object you want to locate always. In this case you just have to hide it in your car.
llavero-trackr
Now just have to open the application on your mobile and you can see on the map the position of your device. If you get to lose your car, simply select “find device” and you’ll get the coordinates of the new location.

How much is it going to cost me?
You’re probably thinking that this device will be very expensive…. nope. This is the best part, you can acquire one for so little, the price is about 27$. Not bad considering it gives peace of mind.',
                'img' => '14732458066640',
                'created_at' => '2016-09-07 10:56:46',
                'updated_at' => '2016-09-07 10:56:46',
                'title' => 'How to track your vehicle on the cheap, using your smartphone?',
            ),
            8 => 
            array (
                'id' => 16,
                'uid' => 11,
            'text' => 'PlayStation VR is expensive enough by itself, so you probably don\'t relish the idea of spending more just to get a taste of what the PS4 headset is like. Thankfully, you won\'t have to. Sony has revealed that PSVR\'s accompanying demo disc will include samples of eight games. A handful are definitely lighter releases that serve more as showcases (PlayStation VR Worlds most notably), but there are also tasters of games you might well buy later. You can play demos for Battlezone, Driveclub VR, the ubiquitous VR sampler EVE: Valkyrie and RIGS: Mechanized Combat League, among others.

This lineup surfaced on Sony\'s European PlayStation Blog, so don\'t be surprised if the lineup changes depending on your region. Should it remain largely intact from country to country, though, it\'s good news for many future PSVR owners. Yes, the demos are ultimately there to get you to buy games, but the breadth is important. You won\'t run out of things to try minutes after opening the box, and you\'ll get a genuinely diverse range of experiences that will give you a feel for what\'s possible in VR. That\'s particularly important when many players will know very little about VR, let alone have first-hand experience.',
                'img' => '14732458714152',
                'created_at' => '2016-09-07 10:57:52',
                'updated_at' => '2016-09-07 10:57:52',
                'title' => 'The PlayStation VR includes a demo disc loaded with games',
            ),
            9 => 
            array (
                'id' => 17,
                'uid' => 11,
                'text' => 'NASA astronaut Jeff Williams has landed back on the planet after a record-breaking stint aboard the International Space Station. He just spent 172 days on the orbiting lab, bringing his total time spent in space to 534 days, 2 hours and 48 minutes. That makes Williams the most experienced NASA astronaut, snatching the title of "American who has spent the most time off the planet" from his colleague Scott Kelly. If you\'ll recall, Kelly came home from a one-year ISS mission in March, which brought his total to 520 days, 10 hours and 33 minutes.

Expedition 48\'s Commander Williams installed an ISS space taxi dock with fellow astronaut Kate Rubins in mid-August. The dock would give Boeing and SpaceX a way to ferry astronauts to the station, finally freeing NASA from hitching a ride on Russian rockets. Since those taxis won\'t be ready until 2017 or 2018, though, Williams had to come home aboard a Soyuz with Russian cosmonauts Alexey Ovchinin and Oleg Skripochka. Besides breaking records and doing spacewalks, he also captured stunning photos of our planet from above during his stay -- check them out if you need one more reason to feel envious as a land-locked space lover.',
                'img' => '14732459487537',
                'created_at' => '2016-09-07 10:59:09',
                'updated_at' => '2016-09-07 10:59:09',
                'title' => 'NASA\'s most experienced astronaut lands back on Earth',
            ),
            10 => 
            array (
                'id' => 18,
                'uid' => 11,
            'text' => 'Not gonna lie. I\'m a giant smartwatch nerd, and an even bigger Michael Kors fan. So when I received the invitation to review the company\'s new Android Wear timepieces, I was stoked. The Michael Kors Access range falls in line with partner company Fossil Group\'s mission to smarten up its range of wristwatches across its brands, from Fossil (duh) and Kate Spade to Emporio Armani, Diesel and Skagen. And that should only mean good things for the fashionable wearable industry. But, try as I might, I\'m having a hard time staying excited about the new MK smartwatches.',
                'img' => '14732460262316',
                'created_at' => '2016-09-07 11:00:27',
                'updated_at' => '2016-09-07 11:00:27',
                'title' => 'Michael Kors Access smartwatches\' value is face deep',
            ),
            11 => 
            array (
                'id' => 19,
                'uid' => 11,
                'text' => 'The long-rumoured death of the iPhone\'s headphone jack has left everybody wondering: What\'s going to become of Apple\'s EarPods? Well, they\'ll probably go wireless, but according to one analyst, they won\'t come with your iPhone. They\'ll be sold separately -- and they might be expensive. KGI Securities\' Ming-Chi Kuo believes that Apple will announce a pair of high-end "AirPod" earbuds tomorrow as a premium accessory for iPhone 7 buyers. They won\'t come in the box like Apple\'s current earbuds, he says, and may not even use Bluetooth.

According to Kuo, Apple may have designed a "Bluetooth-like communications chip" with more strict limits on power consumption. This same low-power chip may also be used to communicate with smart car systems and other home accessories. The Analyst even goes as far as to name Taiwan Semiconductor as the company he believes developed the chip.

So, if Apple\'s wireless answer to removing the headphone jack is going to be a premium accessory, what about the average user? Not to worry: Kuo believes the iPhone 7 will bundle in a pair of lighting-connector compatible earbuds or, at bare minimum, a 3.5mm to lighting adapter. Even so, take this report with a grain of salt -- Kuo has a strong history of getting these kinds of predictions right, but we won\'t know for sure until tomorrow.',
                'img' => '14732461701012',
                'created_at' => '2016-09-07 11:02:51',
                'updated_at' => '2016-09-07 11:02:51',
                'title' => 'Apple\'s high-end wireless earbuds may not ship with iPhone 7',
            ),
            12 => 
            array (
                'id' => 20,
                'uid' => 13,
                'text' => 'Google is changing the way it indexes fashion-related content as part of an experiment involving outfits posted by fashion bloggers. Shop the Look culls various products from outfit searches so you can purchase pieces of said outfit as seen in the photo. You\'ll be able to tap through the image and explore what\'s available in a visually similar manner to the outfit via Shopping ads.

For instance, if you searched for an outfit like "little black dress," Google would offer up search results from social influencers that match the terms. If you\'re in the US on a mobile device, you\'ll see a blogger wearing a dress, glasses and shoes that link to online shops where you can purchase them.

If you\'re in the business of fashion and want your products to be seen, this might be a great way to go in the future. Given how often potential clothes buyers tend to search for images of the outfits they want to wear, ads that show exactly what they\'re looking for are a natural fit.',
                'img' => '14732471831625',
                'created_at' => '2016-09-07 11:19:44',
                'updated_at' => '2016-09-07 11:19:44',
                'title' => 'Inspirational\' fashion ads sell exactly the look you\'re Googling',
            ),
        ));
        
        
    }
}
