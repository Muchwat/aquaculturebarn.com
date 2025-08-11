-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 26, 2025 at 08:21 AM
-- Server version: 9.0.1
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thegw`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `slug`, `title`, `thumbnail`, `content`, `author`, `tags`, `published`, `created_at`, `updated_at`) VALUES
(8, 6, 'women-and-economy-amidst-pandemic-lesson-from-shona-epz-in-kenya-during-covid-19', 'WOMEN AND ECONOMY AMIDST PANDEMIC: LESSON FROM SHONA EPZ IN KENYA DURING COVID 19', 'thumbnails/01HSXW94P0NR1969HDBG6JQJXG.jpg', '<p><br></p><p>Many things run in minds when they hear the term woman. Some people would think of the one that Carried them for nine months, others would think of that supporting Lady you call your wife who has been helping you throughout your hard times, and another will think of the pillars of the economy not forgetting the drivers of joy to the world. None the less it is always that positive thought.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;image.png&quot;,&quot;filesize&quot;:1143428,&quot;height&quot;:586,&quot;href&quot;:&quot;https://www.thegrasrootswalkers.com/storage/w82asTSwg2VldwX0XfpDhgB6lBxETF8zeav2n0oW.png&quot;,&quot;url&quot;:&quot;https://www.thegrasrootswalkers.com/storage/w82asTSwg2VldwX0XfpDhgB6lBxETF8zeav2n0oW.png&quot;,&quot;width&quot;:880}\" data-trix-content-type=\"image/png\" data-trix-attributes=\"{&quot;caption&quot;:&quot;PPEs being manufactured at Shona EPZ&quot;,&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--png\"><a href=\"https://www.thegrasrootswalkers.com/storage/w82asTSwg2VldwX0XfpDhgB6lBxETF8zeav2n0oW.png\"><img src=\"https://www.thegrasrootswalkers.com/storage/w82asTSwg2VldwX0XfpDhgB6lBxETF8zeav2n0oW.png\" width=\"880\" height=\"586\"><figcaption class=\"attachment__caption attachment__caption--edited\">PPEs being manufactured at Shona EPZ</figcaption></a></figure>Corona Virus a pandemic took the world in a storm. From the first world to third world countries many companies seized operation, resulting in a massive loss of jobs. Here in Kenya, we talked to EPZA Limited (Export Process Zone Authority) company that managed to keep 100 % of their employees who are mostly women. Shona Epz is the largest textile Apparel Sourcing company in E. A. The factory situated in Athi River, a town found at the outcast part of Nairobi in Machakos county. It produces a variety of products from Jeans, boxer’s T-shirts, Tank tops, Trousers for big global brands such as Calvin Klein, Hennes and Mauritz (H.M), Victoria secrets, Tommy Hilfiger and many more. Even though Shona EPZ was greatly affected by the outbreak of coronavirus and were on the verge of letting go of 40% of their employees, they still found a way of not only keeping all their employees but also helping Kenya in the fight against coronavirus by producing personal protective Equipment’s approved by the National Government. In an Inquest to find out what exactly was the driving force for this, we talked to Isaac Maluki the CEO of Shona EPZ<figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;image.png&quot;,&quot;filesize&quot;:964709,&quot;height&quot;:553,&quot;href&quot;:&quot;https://www.thegrasrootswalkers.com/storage/kzrnKdiEuOJTQR5exf5iU9gDib19JkYfI5vSdTwr.png&quot;,&quot;url&quot;:&quot;https://www.thegrasrootswalkers.com/storage/kzrnKdiEuOJTQR5exf5iU9gDib19JkYfI5vSdTwr.png&quot;,&quot;width&quot;:975}\" data-trix-content-type=\"image/png\" data-trix-attributes=\"{&quot;caption&quot;:&quot;Isaac Maluki CEO of Shona EPZ&quot;,&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--png\"><a href=\"https://www.thegrasrootswalkers.com/storage/kzrnKdiEuOJTQR5exf5iU9gDib19JkYfI5vSdTwr.png\"><img src=\"https://www.thegrasrootswalkers.com/storage/kzrnKdiEuOJTQR5exf5iU9gDib19JkYfI5vSdTwr.png\" width=\"975\" height=\"553\"><figcaption class=\"attachment__caption attachment__caption--edited\">Isaac Maluki CEO of Shona EPZ</figcaption></a></figure>\"After the pandemic struck in China we had to think what we would have to do as a company,\" he started.</p><p>“Our greatest worry was our Employees because we were wondering whether to give our staff unpaid leave until situation calm down or try and look for other alternatives that would allow us to keep our employees and still give them some earnings,” he explained.</p><p>“At that point, we thought why not just start manufacture what we are finding is becoming the difficult thing to manufacture around the world which was the PPEs and mask,” he said.</p><p>Mr. Maluki further explains to us that by the help of the Kenya Association of manufactures, Ministry of Industry and Trade, Ministry of Health and the Kenyan Fashion council they were able to discuss with the government on solutions that could be done and Shona Epz Limited was able to win a contract with the government to make Personal protective equipment’s (PPEs). Shona EPZ become among the three companies licensed to manufacture protective gear by the government. The other companies included Kitui County Textile Centre (KIKOTEC) in Kitui and Bedi Investment Limited in Nakuru.</p><p>Being able to offload our PPEs garments such as aprons, surgical mask, safety footwear, coveralls, and a surgical mask to the local market during this pandemic, meant that EPZ would be able to retain all their employees who are mostly women.</p><p>&nbsp;“The ratio of female to male in terms of the people they impact out there, I believe that for the women is higher and that is why most of our employees are women. We believe that as we employ more women in our company we are impacting more people,” he concluded.</p><p>&nbsp;Rama Tumbo who is a production manager at Shona EPZ told us that in a day they could produce more than 50 000 sets of PPEs.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;image.png&quot;,&quot;filesize&quot;:1099204,&quot;height&quot;:624,&quot;href&quot;:&quot;https://www.thegrasrootswalkers.com/storage/4iwE36tLNCfsHSSCXDkqpanOK3htD6RGKKfWZ2j6.png&quot;,&quot;url&quot;:&quot;https://www.thegrasrootswalkers.com/storage/4iwE36tLNCfsHSSCXDkqpanOK3htD6RGKKfWZ2j6.png&quot;,&quot;width&quot;:975}\" data-trix-content-type=\"image/png\" data-trix-attributes=\"{&quot;caption&quot;:&quot;Rama Tumbo Production Manager&quot;,&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--png\"><a href=\"https://www.thegrasrootswalkers.com/storage/4iwE36tLNCfsHSSCXDkqpanOK3htD6RGKKfWZ2j6.png\"><img src=\"https://www.thegrasrootswalkers.com/storage/4iwE36tLNCfsHSSCXDkqpanOK3htD6RGKKfWZ2j6.png\" width=\"975\" height=\"624\"><figcaption class=\"attachment__caption attachment__caption--edited\">Rama Tumbo Production Manager</figcaption></a></figure>“When we produce 50, 000 pieces of the PPEs aprons then we also have to produce the same amount of Masks, Safety footwear, and coveralls because we sell them as a set. We have 300 Employees working for 24 hours a day so we can manage, \"Rema stated.</p><p>Joseph Kayalo who is the Human Resource Manager said that initially they were only allowed to supply only 20% of their PPEs to the local market and they had already laid off 40% of their employees. Things turned positive later after the government uplifted that restriction and allowed them to sell 100% of their PPEs and mask to the local market and they were able to retain all their employees.</p><div class=\"attachment-gallery attachment-gallery--2\"><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;image.png&quot;,&quot;filesize&quot;:1227141,&quot;height&quot;:615,&quot;href&quot;:&quot;https://www.thegrasrootswalkers.com/storage/zlCynWiMRY4689gPxXgfhf05RFWWe3Yz2fcr6jFE.png&quot;,&quot;url&quot;:&quot;https://www.thegrasrootswalkers.com/storage/zlCynWiMRY4689gPxXgfhf05RFWWe3Yz2fcr6jFE.png&quot;,&quot;width&quot;:975}\" data-trix-content-type=\"image/png\" data-trix-attributes=\"{&quot;caption&quot;:&quot;Joseph Kayalo Human Resource Manager&quot;,&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--png\"><a href=\"https://www.thegrasrootswalkers.com/storage/zlCynWiMRY4689gPxXgfhf05RFWWe3Yz2fcr6jFE.png\"><img src=\"https://www.thegrasrootswalkers.com/storage/zlCynWiMRY4689gPxXgfhf05RFWWe3Yz2fcr6jFE.png\" width=\"975\" height=\"615\"><figcaption class=\"attachment__caption attachment__caption--edited\">Joseph Kayalo Human Resource Manager</figcaption></a></figure><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;image.png&quot;,&quot;filesize&quot;:1057071,&quot;height&quot;:586,&quot;href&quot;:&quot;https://www.thegrasrootswalkers.com/storage/QsGSjdHuZW2O83kFr6neTy5MgyVMwUVnTcTe4q3B.png&quot;,&quot;url&quot;:&quot;https://www.thegrasrootswalkers.com/storage/QsGSjdHuZW2O83kFr6neTy5MgyVMwUVnTcTe4q3B.png&quot;,&quot;width&quot;:975}\" data-trix-content-type=\"image/png\" data-trix-attributes=\"{&quot;caption&quot;:&quot;Cendrine Wahungu supervisor and is also involved in making the PPEs&quot;,&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--png\"><a href=\"https://www.thegrasrootswalkers.com/storage/QsGSjdHuZW2O83kFr6neTy5MgyVMwUVnTcTe4q3B.png\"><img src=\"https://www.thegrasrootswalkers.com/storage/QsGSjdHuZW2O83kFr6neTy5MgyVMwUVnTcTe4q3B.png\" width=\"975\" height=\"586\"><figcaption class=\"attachment__caption attachment__caption--edited\">Cendrine Wahungu supervisor and is also involved in making the PPEs</figcaption></a></figure></div><p>Cendrine Wahungu who is a supervisor at Shona says that they were working day and night to ensure they produce protective gear so that the doctors can protect themselves when they are fighting Covid-19. Cendrine is one of the staffs whose effort was very influential since they opted to manufacturing PPEs.&nbsp;</p><p>It is true to say that in any economy that is yet to develop, tough economic situations will always call for a change of strategy, towards a strategy that aims at reducing inequalities for the well-being of the society.</p><p>&nbsp;</p><p>&nbsp;</p>', 'Mohammed Nyaringu/ Yuko Shem', '[\"5\"]', 1, '2024-02-03 13:43:23', '2024-04-16 08:47:16'),
(9, 4, 'the-glass-of-hope', 'THE GLASS OF HOPE ', 'thumbnails/01HSXW5VMRPFBQYQJ5KRG452FP.jpg', '<p>With urbanization witnessed across the entire African countries so rapidly, the production of waste has become a problem that is affecting most regions in the African continent. According to the Kenyan government, the country produces 22,000 tons of a waste per day, of which 60% is organic. At the same time, 35% and 5% of the material is recyclable and non-recyclable respectively. Nairobi alone produces 2,475 tones. Uncollected solid waste is one of Nairobi\'s most obvious ecological issues. There are no assortment frameworks for waste collection in the low-centered salary zones and informal settlements. This is mainly because of the housing structure and population distribution. In high pay and middle-class regions, private waste collection companies are rising up so fast. Residents pay liberally without genuinely knowing where the waste will end up.</p><p>&nbsp;</p><p>Glass saves about one-third of the energy as compared to making the products from unused materials. That is one of the leading reasons to the creation of Bottle Logistics Company. This is a company that collects glass waste and recycles them into highly refined glass cullet, glass aggregate, and clean reusable bottles in the best possible form.&nbsp;</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;image.png&quot;,&quot;filesize&quot;:1855554,&quot;height&quot;:650,&quot;href&quot;:&quot;https://www.thegrasrootswalkers.com/storage/ntI2G7BpGXS8PUtDFXwDwEwBhwRhnlIdXFrC5A7J.png&quot;,&quot;url&quot;:&quot;https://www.thegrasrootswalkers.com/storage/ntI2G7BpGXS8PUtDFXwDwEwBhwRhnlIdXFrC5A7J.png&quot;,&quot;width&quot;:975}\" data-trix-content-type=\"image/png\" data-trix-attributes=\"{&quot;caption&quot;:&quot;Bottle Logistics workers collecting non-green bottles to ensure that only green colored ones are crashed&quot;,&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--png\"><a href=\"https://www.thegrasrootswalkers.com/storage/ntI2G7BpGXS8PUtDFXwDwEwBhwRhnlIdXFrC5A7J.png\"><img src=\"https://www.thegrasrootswalkers.com/storage/ntI2G7BpGXS8PUtDFXwDwEwBhwRhnlIdXFrC5A7J.png\" width=\"975\" height=\"650\"><figcaption class=\"attachment__caption attachment__caption--edited\">Bottle Logistics workers collecting non-green bottles to ensure that only green colored ones are crashed</figcaption></a></figure>“Bottle logistics is a professional glass recovery and recycling company which started in 2018.” Louisa Gathecha the C.E.O of Bottle Logistics started off our interview.&nbsp;</p><p>“I worked for leading multinational companies importing wine and spirit into the country. After nine years in the field, I became increasingly conscious of the amount of glass waste produced from the glass packaging. I started investigating and doing my research on what I could do to this glass waste”, she went ahead.</p><p>She figured out that it can be an idea that they could convert into a business.&nbsp;</p><p>“I had a bit of capital from my savings, and that played a big role since that I had some cash, I could now focus more on the process rather than money”, Louisa Gathecha&nbsp; says.</p><p>&nbsp;</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;image.png&quot;,&quot;filesize&quot;:1188152,&quot;height&quot;:650,&quot;href&quot;:&quot;https://www.thegrasrootswalkers.com/storage/BG9ajHQLAQVkLNZttbOOihf8BUqXzBUsDPzd0YQq.png&quot;,&quot;url&quot;:&quot;https://www.thegrasrootswalkers.com/storage/BG9ajHQLAQVkLNZttbOOihf8BUqXzBUsDPzd0YQq.png&quot;,&quot;width&quot;:975}\" data-trix-content-type=\"image/png\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--png\"><a href=\"https://www.thegrasrootswalkers.com/storage/BG9ajHQLAQVkLNZttbOOihf8BUqXzBUsDPzd0YQq.png\"><img src=\"https://www.thegrasrootswalkers.com/storage/BG9ajHQLAQVkLNZttbOOihf8BUqXzBUsDPzd0YQq.png\" width=\"975\" height=\"650\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">image.png</span> <span class=\"attachment__size\">1.13 MB</span></figcaption></a></figure>“We mostly deal with direct selling to our customers, such as the glass manufacturing companies, and our suppliers, which are the glass waste collection companies”, the CEO stated.</p><p>&nbsp;However, they are very strong and present on all their social media pages such as Twitter, Facebook, and Instagram. They try to create awareness around glass waste and how consumers can segregate their waste and supply the glass waste to their company.&nbsp;</p><p>“We have achieved automation because we have an automatic glass cullet processing line, which is the first of its kind in the industry. We also have direct access to the market since we work directly with the glass manufacturing companies. We also ensure reliability when it comes to glass waste collection, unlike our competitors.” she added.&nbsp;</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;image.png&quot;,&quot;filesize&quot;:1806201,&quot;height&quot;:650,&quot;href&quot;:&quot;https://www.thegrasrootswalkers.com/storage/ac63hhBCtEKQEtAmsCoryrVOlBf4vvxDiSMeJpcE.png&quot;,&quot;url&quot;:&quot;https://www.thegrasrootswalkers.com/storage/ac63hhBCtEKQEtAmsCoryrVOlBf4vvxDiSMeJpcE.png&quot;,&quot;width&quot;:975}\" data-trix-content-type=\"image/png\" data-trix-attributes=\"{&quot;caption&quot;:&quot;Louisa Gathecha, C.E.O Bottle Logistics&quot;,&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--png\"><a href=\"https://www.thegrasrootswalkers.com/storage/ac63hhBCtEKQEtAmsCoryrVOlBf4vvxDiSMeJpcE.png\"><img src=\"https://www.thegrasrootswalkers.com/storage/ac63hhBCtEKQEtAmsCoryrVOlBf4vvxDiSMeJpcE.png\" width=\"975\" height=\"650\"><figcaption class=\"attachment__caption attachment__caption--edited\">Louisa Gathecha, C.E.O Bottle Logistics</figcaption></a></figure>“We are currently about to start a journey of rolling out glass banks, but we are still looking out for funding right now. The concept works because we will set up a glass collection bin in a major estate within Nairobi, where consumers can conveniently drop their glass waste. Then we can collect and recycle them as opposed to it ending up in the dumpsite.” Mrs. Gathecha explained.&nbsp;</p><p>“We divert the non-biodegradable glass waste from the environment, and that\'s creating clean cities for Kenyans. We also provide employment opportunities for both the youth and women, which is helping in the empowerment of both genders and reducing poverty.” she stated further.&nbsp;</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;image.png&quot;,&quot;filesize&quot;:1454213,&quot;height&quot;:650,&quot;href&quot;:&quot;https://www.thegrasrootswalkers.com/storage/DV1KdlbWlk5BuUbqVPwT88A1C2JX8LziwDsqTafL.png&quot;,&quot;url&quot;:&quot;https://www.thegrasrootswalkers.com/storage/DV1KdlbWlk5BuUbqVPwT88A1C2JX8LziwDsqTafL.png&quot;,&quot;width&quot;:975}\" data-trix-content-type=\"image/png\" data-trix-attributes=\"{&quot;caption&quot;:&quot;Last process of the picking of glasses&quot;,&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--png\"><a href=\"https://www.thegrasrootswalkers.com/storage/DV1KdlbWlk5BuUbqVPwT88A1C2JX8LziwDsqTafL.png\"><img src=\"https://www.thegrasrootswalkers.com/storage/DV1KdlbWlk5BuUbqVPwT88A1C2JX8LziwDsqTafL.png\" width=\"975\" height=\"650\"><figcaption class=\"attachment__caption attachment__caption--edited\">Last process of the picking of glasses</figcaption></a></figure>“Our major importance in the waste management department is that we recover glass waste, mostly the packaging glass waste we recycle. We also promote the cycler economy since the glass waste is used as a raw material in the production material of a new glass.” the executive told us.&nbsp;</p><p>Their biggest challenge that they are experiencing is in the collection of glass waste. This is&nbsp; because, in Kenya, most households do not segregate their waste, so all the glass, plastic, and organic food end up in one bin, and all that end up in the dumpsite. Therefore, recovering the glass waste in the middle of a large dumpsite in Dandora is quite a challenge.&nbsp; That is why they are looking to lightweight the solution with glass bunk.</p><p>“The services we offer include glass waste collection services and the establishment of reusable glass take-back schemes, and the products include glass cullet and reusable glass bottles. We</p><p>have established networks with waste collection companies in the region, and we also get our raw material from glass waste accumulators and small scale dealers. Our collector\'s network consists of about 150 participants, including small scale glass accumulators and waste collection companies.” she said.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;image.png&quot;,&quot;filesize&quot;:1581771,&quot;height&quot;:650,&quot;href&quot;:&quot;https://www.thegrasrootswalkers.com/storage/xgW4xRktjdsVXwr3d4y5mdJfSxUGf4aWOCvyrULf.png&quot;,&quot;url&quot;:&quot;https://www.thegrasrootswalkers.com/storage/xgW4xRktjdsVXwr3d4y5mdJfSxUGf4aWOCvyrULf.png&quot;,&quot;width&quot;:975}\" data-trix-content-type=\"image/png\" data-trix-attributes=\"{&quot;caption&quot;:&quot;Safety Measures&quot;,&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--png\"><a href=\"https://www.thegrasrootswalkers.com/storage/xgW4xRktjdsVXwr3d4y5mdJfSxUGf4aWOCvyrULf.png\"><img src=\"https://www.thegrasrootswalkers.com/storage/xgW4xRktjdsVXwr3d4y5mdJfSxUGf4aWOCvyrULf.png\" width=\"975\" height=\"650\"><figcaption class=\"attachment__caption attachment__caption--edited\">Safety Measures</figcaption></a></figure>“The Kenyan recycling sector consists of mostly informal dealers and informal businesses, so waste recycling is done as a second option. We chose to start from the dumpsite, before moving to the landfills. From there, we continued to collect glass from merger waste collecting companies who collect waste and then later segregate it for people like glass who are mostly interested in glass waste only. “added the CEO.&nbsp;</p><p>“We have a monthly collection capacity of up to 600 tons with 48 employees. The previous year, we secured funding from the Eco-impact accelerator program, an Italian funded acceleration program where we secured a grant amounting to 15,000 USD. They were looking for green businesses and post-revenue businesses, and local business ecosystems. Our main market scenario is consistent with the glass recycling factories who prefer to use our product, the glass cullet, instead of the raw material, which includes silica and sodium carbonate because of the energy-saving and prolonging of the furnace and machine life at their factory.” she summarized.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;image.png&quot;,&quot;filesize&quot;:1832604,&quot;height&quot;:650,&quot;href&quot;:&quot;https://www.thegrasrootswalkers.com/storage/3PA7lQ5tDumr9RmRMx5gVnULfZhpmLot9TI8bBgJ.png&quot;,&quot;url&quot;:&quot;https://www.thegrasrootswalkers.com/storage/3PA7lQ5tDumr9RmRMx5gVnULfZhpmLot9TI8bBgJ.png&quot;,&quot;width&quot;:975}\" data-trix-content-type=\"image/png\" data-trix-attributes=\"{&quot;caption&quot;:&quot;Mwangi Kelly Mash CO-C.E. O Bottle Logistics&quot;,&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--png\"><a href=\"https://www.thegrasrootswalkers.com/storage/3PA7lQ5tDumr9RmRMx5gVnULfZhpmLot9TI8bBgJ.png\"><img src=\"https://www.thegrasrootswalkers.com/storage/3PA7lQ5tDumr9RmRMx5gVnULfZhpmLot9TI8bBgJ.png\" width=\"975\" height=\"650\"><figcaption class=\"attachment__caption attachment__caption--edited\">Mwangi Kelly Mash CO-C.E. O Bottle Logistics</figcaption></a></figure>They have partnered with Standard Chartered Bank, and IBS at Strathmore University, who guided them through an accelerator program to scale up their business. They have also worked with Eco-Impact, who took them through an accelerator program and given them access to critical services such as accountancy and legal services and helped them register their company professionally and improve the processes.</p><p>&nbsp;</p><p>&nbsp;</p>', 'Mohammed Nyaringu/ Yuko Shem', '[\"6\"]', 1, '2024-02-03 13:53:08', '2024-04-16 08:39:15'),
(10, 7, 'local-currency-gradually-becoming-a-norm-in-kenya-slums', 'Local Currency Gradually Becoming a Norm in Kenya Slums', 'thumbnails/01HSXW6THGDFXMN3PTATAZZQVZ.jpg', '<p>It is called Kawangware. One of the Kenya`s informal settlements known for the unique trading culture. A culture that is only familiar to the locals. But what could be this culture? One of our researchers try to unearth the story. In Kenya’s low income areas, the problem of cash crunch continues to manifests.</p><p>We realised that due to economic instability, people often lack money with which to purchase from each other and that is why we introduced a community currency called Sarafu Credit, to create a stable medium of exchange tied to local development,” says Mr. Will Ruddick, co –founder of Sarafu Credit.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;image.png&quot;,&quot;filesize&quot;:534228,&quot;height&quot;:344,&quot;href&quot;:&quot;https://www.thegrasrootswalkers.com/storage/0GiJIJqJhOhQhKoZVqhj891BnLjrPedHzJlESoTp.png&quot;,&quot;url&quot;:&quot;https://www.thegrasrootswalkers.com/storage/0GiJIJqJhOhQhKoZVqhj891BnLjrPedHzJlESoTp.png&quot;,&quot;width&quot;:543}\" data-trix-content-type=\"image/png\" data-trix-attributes=\"{&quot;caption&quot;:&quot;Anthony Gakiri has an account with sarafu Credit that clients use to pay Photo: Courtesy&quot;,&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--png\"><a href=\"https://www.thegrasrootswalkers.com/storage/0GiJIJqJhOhQhKoZVqhj891BnLjrPedHzJlESoTp.png\"><img src=\"https://www.thegrasrootswalkers.com/storage/0GiJIJqJhOhQhKoZVqhj891BnLjrPedHzJlESoTp.png\" width=\"543\" height=\"344\"><figcaption class=\"attachment__caption attachment__caption--edited\">Anthony Gakiri has an account with sarafu Credit that clients use to pay Photo: Courtesy</figcaption></a></figure>He explains, “Sarafu meaning currency is a network of people that offer their goods and services for Sarafu – a digital token that can be traded just like mpesa. It is a program run by a non-profit foundation called Grassroots Economics.”</p><p>Ruddick adds that Sarafu is meant to fill the gaps of missing Kenyan Shillings (not to replace them). It gives people an opportunity to offer their goods or services for Sarafu when people don\'t have enough shillings, then to reuse the Sarafu for the goods and services of others.</p><p>Sarafu dates back in 2012 when vouchers were first introduced in Bangladesh, Mombasa. The blockchain based version was launched in 2018 and replaced the paper versions like the original Bangla-Pesa.&nbsp;</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;image.png&quot;,&quot;filesize&quot;:1091473,&quot;height&quot;:667,&quot;href&quot;:&quot;https://www.thegrasrootswalkers.com/storage/xvEcoJFCb3KvEBVygA7cJMOxZ4ms0EUpKtlTO50v.png&quot;,&quot;url&quot;:&quot;https://www.thegrasrootswalkers.com/storage/xvEcoJFCb3KvEBVygA7cJMOxZ4ms0EUpKtlTO50v.png&quot;,&quot;width&quot;:683}\" data-trix-content-type=\"image/png\" data-trix-attributes=\"{&quot;caption&quot;:&quot;A client buying kerosene using Sarafu credit Photo: Courtesy&quot;,&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--png\"><a href=\"https://www.thegrasrootswalkers.com/storage/xvEcoJFCb3KvEBVygA7cJMOxZ4ms0EUpKtlTO50v.png\"><img src=\"https://www.thegrasrootswalkers.com/storage/xvEcoJFCb3KvEBVygA7cJMOxZ4ms0EUpKtlTO50v.png\" width=\"683\" height=\"667\"><figcaption class=\"attachment__caption attachment__caption--edited\">A client buying kerosene using Sarafu credit Photo: Courtesy</figcaption></a></figure>“We started working on community currencies in Kenya in 2010. We realized that there\'s not enough medium of exchange to meet supply and demand. Because prices tend to be fairly fixed, you end up with people just sitting around waiting until they get an income. There are so many goods and services people could potentially be doing, that they just don\'t because there\'s this lack of money. And that\'s at the heart in a way of a lot of our thinking. Now that Covid 19 has worsened matters, there is need for currency provision to enable people continue with the demand and supply chain</p><p>“Sarafu Credit currency takes the form of paper notes, circulating alongside the Kenya Shilling and through this, we aim at fostering local trade by mobilizing under-used resources to access basic needs by allowing users to trade even when the national currency is scarce,” he says.&nbsp;</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;image.png&quot;,&quot;filesize&quot;:848149,&quot;height&quot;:443,&quot;href&quot;:&quot;https://www.thegrasrootswalkers.com/storage/8zXW9yPXABFetrhIFwRyHxNS3z96tdvnBjXkbO3w.png&quot;,&quot;url&quot;:&quot;https://www.thegrasrootswalkers.com/storage/8zXW9yPXABFetrhIFwRyHxNS3z96tdvnBjXkbO3w.png&quot;,&quot;width&quot;:685}\" data-trix-content-type=\"image/png\" data-trix-attributes=\"{&quot;caption&quot;:&quot;Ruddick (Centre in fleece jacket) in a past event during the launch of Sarafu Credit  Photo: Courtesy&quot;,&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--png\"><a href=\"https://www.thegrasrootswalkers.com/storage/8zXW9yPXABFetrhIFwRyHxNS3z96tdvnBjXkbO3w.png\"><img src=\"https://www.thegrasrootswalkers.com/storage/8zXW9yPXABFetrhIFwRyHxNS3z96tdvnBjXkbO3w.png\" width=\"685\" height=\"443\"><figcaption class=\"attachment__caption attachment__caption--edited\">Ruddick (Centre in fleece jacket) in a past event during the launch of Sarafu Credit  Photo: Courtesy</figcaption></a></figure>So far, Ruddick says over 40,000 small businesses all over Kenya have enrolled, primarily in informal settlements and rural areas of Kwale. He adds that anyone can enroll by dialing *483*46# or call Grassroot Economics, the organization coordinating the programme.</p><p>&nbsp;Asked how it is operated&nbsp; Ruddick says People offer their goods and services in Sarafu (1:1 to Kenyan Shillings) then re-spend the Sarafu on the goods and services of others in the network - generally by enrolling their community. “We\'re just growing by word of mouth and people understanding the concept of a community currency to support local economies, he adds”</p><p>He adds that systems based on a community currency, based on local assets, increases local sales and helps directly develop the local economy, adding that it creates stable markets based on local development and trust.”</p><p>&nbsp;He adds that if anyone wants to buy a product from either the shop or market worth Ksh 30, one can trade with a voucher worth Ksh.20 and Ksh 10 to a vendor that accepts the voucher.</p><p>&nbsp;In return, the vendor will use 20 Sarafu Credit voucher to restock the shop. “The community has to keep circulating the Sarafu Credit and use it at least once a day,” he adds “Ideally Sarafu can be used whenever there is an economic downturn - these were common before and during Covid and will likely even be more common in the future. Sarafu is simply a way for a community to support themselves when in need.”</p><p>Meanwhile, the community hopes&nbsp; the voucher will be able to be used in other areas and in bigger stores like supermarkets to enable them shop.&nbsp;</p><p>Ruddick says the decentralized digital platform, called the Sarafu Network, will not only allow communities to create their own tokens but also enable individuals to do the same. On this platform, anyone without blockchain programming knowledge will be able to create a token connected to a certain purpose.</p><p><strong>The community currency circulates around the community helping to connect local supply and demand for people who lack regular access to national currency.</strong>”</p><p>Grassroot Economics , who also train the community on how to use Sarafu credit, also offer support within the&nbsp; communities using Sarafu&nbsp; through supporting&nbsp; productive capacity building through training, as well as farming inputs. They also work closely with the Kenya Red Cross as Sarafu is considered a Community Inclusion Currency.</p><p>Will Ruddick and Caroline Dama are board of directors at Grassroots Economics Foundation<strong>, a non-profit foundation that seeks to empower marginalized communities to take charge of their own livelihoods and economic future</strong>” in Kenya. Ruddcik is a development economist focusing on currency innovation and the founder of the award winning Bangla-Pesa initiative which uses a mutual credit model.</p><p>&nbsp;</p><p>&nbsp;</p>', 'Lilian Museka/ Yuko Shem', '[\"3\"]', 1, '2024-02-03 13:58:19', '2024-04-16 08:43:00'),
(11, 7, 'the-grassroots-using-their-connection-in-slums-to-introduce-the-japanese-scholars-to-nairobi-slums', 'The Grassroots using their connection in Slums to Introduce the Japanese Scholars to Nairobi Slums', 'thumbnails/01HSXW7VH0S60THSQBWGV7MBNH.jpg', '<p>Many foreigners have a passion to get into contact with most of the slums in Kenya and just have a feeling of the slum life- how life goes on. This however has been challenging due to lack of local grassroots connections and high insecurity issues around these slum areas. However, with The grassroots walkers, the CEO being born and raised in Korogocho slums, is familiar with this environment making it easier for the foreign visitors to navigate these area.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:1200,&quot;url&quot;:&quot;https://scontent.febb3-1.fna.fbcdn.net/v/t39.30808-6/428479908_10228779808293556_3045811114757138457_n.jpg?_nc_cat=104&amp;ccb=1-7&amp;_nc_sid=5f2048&amp;_nc_ohc=MwJtwnNn8bkAb4IwIyM&amp;_nc_pt=1&amp;_nc_ht=scontent.febb3-1.fna&amp;oh=00_AfAD1WVB2haaHYvnxFZOYvUa9QHO2YeCAm7JQD7fFiS1eQ&amp;oe=66241CD5&quot;,&quot;width&quot;:1600}\" data-trix-content-type=\"image\" data-trix-attributes=\"{&quot;caption&quot;:&quot;Korogocho slum visit alongside Kyoto University researchers led by Takahashi Motoki Sensei&quot;}\" class=\"attachment attachment--preview\"><img src=\"https://scontent.febb3-1.fna.fbcdn.net/v/t39.30808-6/428479908_10228779808293556_3045811114757138457_n.jpg?_nc_cat=104&amp;ccb=1-7&amp;_nc_sid=5f2048&amp;_nc_ohc=MwJtwnNn8bkAb4IwIyM&amp;_nc_pt=1&amp;_nc_ht=scontent.febb3-1.fna&amp;oh=00_AfAD1WVB2haaHYvnxFZOYvUa9QHO2YeCAm7JQD7fFiS1eQ&amp;oe=66241CD5\" width=\"1600\" height=\"1200\"><figcaption class=\"attachment__caption attachment__caption--edited\">Korogocho slum visit alongside Kyoto University researchers led by Takahashi Motoki Sensei</figcaption></figure>This pre visit was a kind of a preliminary field visit to shape future researches with an aim of trying to find interesting slum issues that might serve as future research areas.<figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;WhatsApp Image 2024-03-14 at 21.03.40_bb0cc00a.jpg&quot;,&quot;filesize&quot;:532642,&quot;height&quot;:1536,&quot;href&quot;:&quot;https://www.thegrasrootswalkers.com/storage/dOvoR8dzK56IXZBOnKSfPL491kumVLPpfWsSxEri.jpg&quot;,&quot;url&quot;:&quot;https://www.thegrasrootswalkers.com/storage/dOvoR8dzK56IXZBOnKSfPL491kumVLPpfWsSxEri.jpg&quot;,&quot;width&quot;:2048}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;caption&quot;:&quot;Targeting Activity Majengo slum&quot;,&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpg\"><a href=\"https://www.thegrasrootswalkers.com/storage/dOvoR8dzK56IXZBOnKSfPL491kumVLPpfWsSxEri.jpg\"><img src=\"https://www.thegrasrootswalkers.com/storage/dOvoR8dzK56IXZBOnKSfPL491kumVLPpfWsSxEri.jpg\" width=\"2048\" height=\"1536\"><figcaption class=\"attachment__caption attachment__caption--edited\">Targeting Activity Majengo slum</figcaption></a></figure></p><p>Additionally we took part in other researches in slum areas targeting young individuals in slums likely to join some criminals activities.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;WhatsApp Image 2024-03-14 at 21.03.40_e52b6f1d.jpg&quot;,&quot;filesize&quot;:520330,&quot;height&quot;:1536,&quot;href&quot;:&quot;https://www.thegrasrootswalkers.com/storage/nhEXv6ahfETt91stOMOcrGJtOAPJC6DeadZqj2Ac.jpg&quot;,&quot;url&quot;:&quot;https://www.thegrasrootswalkers.com/storage/nhEXv6ahfETt91stOMOcrGJtOAPJC6DeadZqj2Ac.jpg&quot;,&quot;width&quot;:2048}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;caption&quot;:&quot;Targeting activity Mathare Slum&quot;,&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpg\"><a href=\"https://www.thegrasrootswalkers.com/storage/nhEXv6ahfETt91stOMOcrGJtOAPJC6DeadZqj2Ac.jpg\"><img src=\"https://www.thegrasrootswalkers.com/storage/nhEXv6ahfETt91stOMOcrGJtOAPJC6DeadZqj2Ac.jpg\" width=\"2048\" height=\"1536\"><figcaption class=\"attachment__caption attachment__caption--edited\">Targeting activity Mathare Slum</figcaption></a></figure></p><p>Good to note that the targeting activities took place in the Nairobi slums including Mathare and some recruited youths found the opportunity to join mobile phone repair training jointly organized by accept International and JICA.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:923,&quot;url&quot;:&quot;https://scontent.febb3-1.fna.fbcdn.net/v/t39.30808-6/425432824_10228779808933572_4463103888565100839_n.jpg?_nc_cat=103&amp;ccb=1-7&amp;_nc_sid=5f2048&amp;_nc_ohc=oq7z0XaSlt8Ab7CXqu6&amp;_nc_pt=1&amp;_nc_ht=scontent.febb3-1.fna&amp;oh=00_AfB5PABjCpbSsFSXl-JETlxgsUUNX6K1oXz6djR_7jMUhg&amp;oe=662418F5&quot;,&quot;width&quot;:1280}\" data-trix-content-type=\"image\" data-trix-attributes=\"{&quot;caption&quot;:&quot;Kyoto University researchers as Dandora Dump site&quot;}\" class=\"attachment attachment--preview\"><img src=\"https://scontent.febb3-1.fna.fbcdn.net/v/t39.30808-6/425432824_10228779808933572_4463103888565100839_n.jpg?_nc_cat=103&amp;ccb=1-7&amp;_nc_sid=5f2048&amp;_nc_ohc=oq7z0XaSlt8Ab7CXqu6&amp;_nc_pt=1&amp;_nc_ht=scontent.febb3-1.fna&amp;oh=00_AfB5PABjCpbSsFSXl-JETlxgsUUNX6K1oXz6djR_7jMUhg&amp;oe=662418F5\" width=\"1280\" height=\"923\"><figcaption class=\"attachment__caption attachment__caption--edited\">Kyoto University researchers as Dandora Dump site</figcaption></figure></p><p>Of special concern is the fact that the research team found time to join the famous Dandora dump site to experiance the work life in the dump site. Thanks to the local connection our company has with these grassroots stakeholders.Lets enjoy walking, Lets walk together. The Grassroots Walkers, We walk for you, We walk with. Karibu.</p><p><br></p><p><br></p>', 'Shem Yuko', '[\"5\"]', 1, '2024-03-14 12:16:36', '2024-04-16 08:29:29'),
(13, 6, 'our-company-wins-contract-to-implement-research-on-building-market-opportunities-and-social-cohesion-for-urban-youths-in-nairobi-in-january-2025', 'Our Company wins contract to Implement Research on: ``Building Market Opportunities and Social Cohesion for Urban Youths in Nairobi`` in January 2025', 'thumbnails/01JFHFABEB8P2SJ33DV1NB8NPX.jpg', '<p>This project is contracted to the GWL by Musashi university and is conducted under the research project “Inter-Group Conflicts and Radicalization: Multi-Dimensional Measurements and Policy Interventions”, supported by JST-PRESTO. The project will target over 2000 youths in slums in Nairobi county.&nbsp;</p><p>Selected youths will also join phone repair training activity implemented by Accept International in collaboration with The Grassroots Walkers and JICA.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;high r.jpg&quot;,&quot;filesize&quot;:284861,&quot;height&quot;:1200,&quot;href&quot;:&quot;https://www.thegrasrootswalkers.com/storage/GZnS6uxe1rhuUIp2HL7NLj4jK6dLPF6sjsF7jCIF.jpg&quot;,&quot;url&quot;:&quot;https://www.thegrasrootswalkers.com/storage/GZnS6uxe1rhuUIp2HL7NLj4jK6dLPF6sjsF7jCIF.jpg&quot;,&quot;width&quot;:1600}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;caption&quot;:&quot;Local Researchers alongside PIs during the piloting phase&quot;,&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpg\"><a href=\"https://www.thegrasrootswalkers.com/storage/GZnS6uxe1rhuUIp2HL7NLj4jK6dLPF6sjsF7jCIF.jpg\"><img src=\"https://www.thegrasrootswalkers.com/storage/GZnS6uxe1rhuUIp2HL7NLj4jK6dLPF6sjsF7jCIF.jpg\" width=\"1600\" height=\"1200\"><figcaption class=\"attachment__caption attachment__caption--edited\">Local Researchers alongside PIs during the piloting phase</figcaption></a></figure></p>', 'Shem Yuko', '[\"5\"]', 1, '2024-12-20 07:25:39', '2024-12-20 07:25:39');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `closing_date` date NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'Kenya Start Ups', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(5, 'Economy', '2024-01-30 09:57:41', '2024-01-30 09:57:41'),
(6, 'Society', '2024-01-30 09:57:48', '2024-01-30 09:57:48'),
(7, 'Local Reality', '2024-01-30 09:58:15', '2024-01-30 09:58:15');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `blog_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `content`, `created_at`, `updated_at`) VALUES
(10, 'Search Engine Index', 'Search Engine', 'submissions@searchindex.site', 'Hello,\r\n\r\nfor your website do be displayed in searches your domain needs to be indexed in the Google Search Index.\r\n\r\nTo add your domain to Google Search Index now, please visit \r\n\r\nhttps://www.domain-submit.org/', '2024-06-30 18:34:16', '2024-06-30 18:34:16'),
(11, 'Ken Huynh', 'Ken', 'kenp2024@aol.com', 'Was just browsing the site and was impressed the layout. Nicely design and great user experience. Just had to drop a message, have a great day! 8dfds87a', '2024-07-02 16:19:02', '2024-07-02 16:19:02'),
(12, 'Robbie', 'Robbie', 'lindsey.robbie@gmail.com', 'Are you still looking at getting your website done/ completed? Contact e.solus@gmail.com\r\n\r\nStruggling to rank on Google? Our SEO experts can help. Contact es.olus@gmail.com', '2024-10-06 18:24:43', '2024-10-06 18:24:43'),
(13, 'Gladys Foskett', 'foskett.gladys@gmail.com', 'Hello thegrasrootswalkers.com Owner!', 'Searching for a cost-effective way to get your ad seen by millions? For Details: http://qkx0xs.form-blasting.online', '2024-10-14 22:17:17', '2024-10-14 22:17:17'),
(14, 'Jeanna Peltier', 'jeanna.peltier@outlook.com', 'need assistance', 'Every second you\'re not using RealPPVTraffic, your competition is stealing your visitors. Take action now to dominate your niche with real, high-quality traffic!  \r\nTake action today: http://realhumanwebtraffic.top', '2024-12-24 16:25:28', '2024-12-24 16:25:28'),
(15, 'Bobby Ryan', 'heyitsbobbyryan@gmail.com', 'Website Issue', 'Hey, I noticed an issue on your website and made a report, what\'s a good number to call you on to go over this?', '2025-01-12 19:18:23', '2025-01-12 19:18:23'),
(16, 'Brian WRIGHT Eng.', 'newsletter@wexxon.com', 'Enjoy the most beautiful German WW2 dance hits', 'You can get these rare and beautiful dance hits at https://wexxon.com/home/17-german-ww2-dance-hits.html', '2025-01-18 13:34:37', '2025-01-18 13:34:37');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(23, '2014_10_12_000000_create_users_table', 1),
(24, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(25, '2019_08_19_000000_create_failed_jobs_table', 1),
(26, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(27, '2024_01_23_040001_create_tags_table', 1),
(28, '2024_01_23_040002_create_categories_table', 1),
(29, '2024_01_23_045642_create_blogs_table', 1),
(30, '2024_01_23_050936_create_comments_table', 1),
(32, '2024_01_26_161108_create_quotations_table', 2),
(34, '2024_01_26_195603_create_careers_table', 3),
(35, '2024_01_29_055927_create_contacts_table', 4),
(36, '2025_01_23_140357_create_news_table', 5),
(37, '2025_01_23_140447_create_work_records_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` json DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `category_id`, `slug`, `title`, `thumbnail`, `content`, `author`, `tags`, `published`, `created_at`, `updated_at`) VALUES
(1, 5, 'this-is-the-first-blog-of-the-year-2024', 'This is the first blog of the year 2024', 'thumbnails/01JJA4P87T1D89CA356E430QQC.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non lobortis lorem, eget rhoncus purus. Etiam bibendum justo mauris, ut placerat dui elementum quis. Aenean suscipit leo vitae feugiat posuere. Integer eleifend posuere elit, quis auctor lacus semper eget. Sed turpis libero, dignissim imperdiet orci in, tempus consectetur est. Donec nunc mauris, dictum a consequat non, accumsan euismod ligula. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec tempor egestas enim et convallis. Maecenas sollicitudin sed est vel placerat. Suspendisse nec est vestibulum, iaculis velit et, maximus mauris. Cras dictum vulputate erat id fermentum. Sed sodales ex ut enim tempor porttitor.</p><p><br></p>', 'Joshua Kitili & Calvin Mulindwa.', '[\"3\"]', 1, '2025-01-23 14:52:19', '2025-01-23 14:52:19');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quotations`
--

CREATE TABLE `quotations` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Local Reality', '2024-01-30 09:58:27', '2024-01-30 09:58:27'),
(4, 'Economy', '2024-01-30 09:58:40', '2024-01-30 09:58:40'),
(5, 'Society', '2024-01-30 09:58:50', '2024-01-30 09:58:50'),
(6, 'Start ups', '2024-01-30 09:59:03', '2024-01-30 09:59:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kevin Muchwat', 'kevinmuchwat@gmail.com', NULL, '$2y$12$q0/s5hxVldx/ZE9S5hxYPOR2pQzhB7KnkyUzBcB0uzDl90Vbr.vlm', 'aTzH9T4Jd1EEhME8UXofzO9u0m0xTZIVSva0GGaBp7hFRDppILvi1tzkejse', '2024-01-23 03:33:12', '2025-01-23 11:22:43'),
(2, 'Yuko Shem', 'yuko.shem@thegrasrootswalkers.com', NULL, '$2y$12$qZOkTZsrT6y8XoRWAH4FXO4zu966qTxptO.2nRlvESOKFzZfyzyZu', 'RCMb5gaxHM5d4srrl4EULInSlqEreZmYPoRyQxDejaIHxJWa2ULr9t5VgHWM', '2024-01-29 07:55:09', '2024-01-29 07:55:09');

-- --------------------------------------------------------

--
-- Table structure for table `work_records`
--

CREATE TABLE `work_records` (
  `id` bigint UNSIGNED NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_records`
--

INSERT INTO `work_records` (`id`, `country`, `project`, `client`, `period`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Japan', 'Project B', 'Client 2', '2023-09', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi elementum nulla quis pulvinar cursus. Vestibulum mollis sed odio ac laoreet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur consectetur nibh sit amet pulvinar efficitur. Morbi elementum purus at nisi imperdiet, eu pulvinar turpis pharetra. Sed commodo ligula est, at interdum ipsum ultricies ac. Integer sed sagittis ligula. Suspendisse vehicula pulvinar ante ac tempor. Vestibulum dolor odio, tincidunt eget erat non, interdum ultricies felis. Phasellus pellentesque sapien eget libero elementum, eu volutpat dolor euismod. Duis imperdiet felis purus, et luctus nibh feugiat quis. Suspendisse id cursus nisi. Nullam dui tortor, mollis ut nulla in, pretium volutpat lorem.</p>', '2025-01-23 12:44:11', '2025-01-23 12:44:31'),
(2, 'Kenya', 'Project A', 'Client 1', '2023-01', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi elementum nulla quis pulvinar cursus. Vestibulum mollis sed odio ac laoreet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur consectetur nibh sit amet pulvinar efficitur. Morbi elementum purus at nisi imperdiet, eu pulvinar turpis pharetra. Sed commodo ligula est, at interdum ipsum ultricies ac. Integer sed sagittis ligula. Suspendisse vehicula pulvinar ante ac tempor. Vestibulum dolor odio, tincidunt eget erat non, interdum ultricies felis. Phasellus pellentesque sapien eget libero elementum, eu volutpat dolor euismod. Duis imperdiet felis purus, et luctus nibh feugiat quis. Suspendisse id cursus nisi. Nullam dui tortor, mollis ut nulla in, pretium volutpat lorem.</p><p><br></p>', '2025-01-23 12:45:07', '2025-01-23 12:45:07'),
(3, 'USA', 'Project C', 'Client 3', '2025-01-08', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi elementum nulla quis pulvinar cursus. Vestibulum mollis sed odio ac laoreet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur consectetur nibh sit amet pulvinar efficitur. Morbi elementum purus at nisi imperdiet, eu pulvinar turpis pharetra. Sed commodo ligula est, at interdum ipsum ultricies ac. Integer sed sagittis ligula. Suspendisse vehicula pulvinar ante ac tempor. Vestibulum dolor odio, tincidunt eget erat non, interdum ultricies felis. Phasellus pellentesque sapien eget libero elementum, eu volutpat dolor euismod. Duis imperdiet felis purus, et luctus nibh feugiat quis. Suspendisse id cursus nisi. Nullam dui tortor, mollis ut nulla in, pretium volutpat lorem.</p>', '2025-01-23 12:45:56', '2025-01-23 12:45:56'),
(4, 'Uganda', 'Project C', 'Client 4', '2023-09-02', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi elementum nulla quis pulvinar cursus. Vestibulum mollis sed odio ac laoreet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur consectetur nibh sit amet pulvinar efficitur. Morbi elementum purus at nisi imperdiet, eu pulvinar turpis pharetra. Sed commodo ligula est, at interdum ipsum ultricies ac. Integer sed sagittis ligula. Suspendisse vehicula pulvinar ante ac tempor. Vestibulum dolor odio, tincidunt eget erat non, interdum ultricies felis. Phasellus pellentesque sapien eget libero elementum, eu volutpat dolor euismod. Duis imperdiet felis purus, et luctus nibh feugiat quis. Suspendisse id cursus nisi. Nullam dui tortor, mollis ut nulla in, pretium volutpat lorem.</p>', '2025-01-23 12:51:01', '2025-01-23 12:51:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`),
  ADD KEY `blogs_category_id_foreign` (`category_id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_slug_unique` (`slug`),
  ADD KEY `news_category_id_foreign` (`category_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `quotations`
--
ALTER TABLE `quotations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `work_records`
--
ALTER TABLE `work_records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotations`
--
ALTER TABLE `quotations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `work_records`
--
ALTER TABLE `work_records`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
