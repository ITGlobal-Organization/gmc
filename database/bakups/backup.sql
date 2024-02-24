-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: gmc
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `publisher` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_at` datetime NOT NULL,
  `author` bigint DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` tinyint DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (11,'Azets - Maximising your move to a cloud accounting solution','<ul><li>Time saving</li><li>Flexibility</li><li>More informed decision-making</li><li>Enhanced data security</li><li>Ease of use</li><li>Requires minimal IT support</li><li>Helps ensure compliance</li></ul><p>If you are ready to realise the benefits to help you run and grow your business, our Digital Delivery Team are on hand to advise, support, guide and train.</p><p>Russell Frayne, Head of UK Digital Accounting Solutions, in our latest article, shares the benefits of engaging with a team who specialise in optimising your current platform, your processes, next steps and benefits of moving to the cloud.</p><p>The discussion points cover the following:</p><ul><li>The value of a systems review</li><li>Working with a specialist migration and implementation team</li><li>The importance of training</li><li>Embedding with post-implementation support</li><li>A bespoke app roadmap</li><li>Data health checks</li></ul><p>With real time access to data, business owners don’t need to wait weeks, months or until year end to know how their business is performing. With up to date data available, this allows business owners to be proactive and adapt any plans or strategy. Ultimately, cloud accounting technology allows data to be viewed as a business partner and key to driving business performance.</p><p><a href=\"https://www.azets.co.uk/news-insights/articles/maximising-your-move-to-a-cloud-accounting-solution/\">AZETS - FULL INSIGHT</a></p>','Andrew H','2023-05-01 12:01:00',62,1,0,'2023-11-13 14:07:43','2023-11-13 14:07:43','the-benefits-of-moving-to-a-cloud-accounting-solution-are-well-documented-and-include-',1),(12,'Gillespie Macandrew Achieves Double-Digit Income Growth 2023','<p>Scottish law firm Gillespie Macandrew announces its financial results for the year ending 28 February 2023 which confirm the business achieved double digit income growth for the second consecutive year.&nbsp; Turnover reached £16.8m, representing an increase of 11% on the previous year, making the firm one of the fastest growing independent law firms in Scotland over the last 5 years.&nbsp; Growth in 2023 was achieved across the firm’s renewable energy, commercial property and dispute resolution services, as well as its market-leading land and rural business and private client activities.</p><p>Chief Executive Officer, Robert Graham-Campbell, said: “These strong results reflect the quality of our practice along with the commitment and expertise of our staff in supporting and advising our clients.”</p><p>The firm’s Chair, Michael Shaw added “We have achieved another strong set of results and continue to attract talented practitioners to our business, as well as enjoying success in nurturing and developing talent from within.“</p><p>Earlier this year the firm appointed five new partners in its Corporate, Family Law, Housebuilder and Private Client teams with internal promotions for Ross MacRae, Sharon Murray and Andrew Leslie. Private client and Chartered Tax Adviser, David Mowlem joined from Turcan Connell in May 2023, while corporate law specialist Alan Gilfillan returned to the firm from Balfour + Manson in July 2023, having completed his traineeship at Gillespie Macandrew.</p><p>Gillespie Macandrew has offices in Edinburgh, Glasgow and Perth and advises clients on all areas of land and rural business, private client, commercial real estate, energy, tax and disputes, combining a personal approach with industry-leading expertise.</p><p><a href=\"http://www.gillespiemacandrew.co.uk/\">GILLESPIE MACANDREW</a></p>','Andrew H','2023-05-02 12:07:00',62,1,0,'2023-11-13 14:09:39','2023-11-13 14:11:48','gillespie-macandrew-achieves-double-digit-income-growth',1),(13,'Perth Sportswoman\'s Dinner 2023','<p>The Ladies of King James VI Golf Club are bringing to you a fantastic evening of fun, food, prizes, entertainment and dancing. We are delighted to announce A &amp; J STEPHEN Ltd as the main sponsor of the event.</p><p>The evening will commence with a welcome drink courtesy of THE BATHROOM COMPANY and photographs with our in-house photographer.&nbsp;</p><p>In addition to a delicious 3-course meal prepared by the quality Chefs of the Salutation Hotel, the event includes elimination game(s); auction and raffle. And that\'s us only getting started! For our After Dinner Speaker we are absolutely delighted to have lined up the award winning actress &amp; playwriter ISOBEL RUTTER. And we are not done yet. STRIKE A CHORD will have you all kicking off your shoes and filling the dancefloor when they perform some of the best songs and music from around the world keeping us singing and dancing until the bar closes and our carriages await.&nbsp;</p><p>Tickets are priced at £60 per person. Available by emailing&nbsp;<a href=\"mailto:theperthsportswomansdinner@gmail.com\">theperthsportswomansdinner@gmail.com</a>, or by messaging us via <a href=\"https://www.facebook.com/PerthSportswomansDinner\">Facebook</a>.</p><p>Individual tickets or tables available. Time to get your team, clubs, friends together and join us for an amazing night.&nbsp;</p><p>Raising funds for our Club and our Get Into Golf Ladies program.</p>','Andrew H','2023-05-03 12:09:00',62,1,0,'2023-11-13 14:11:10','2023-11-13 14:11:10','we-are-delighted-to-announce-that-tickets-are-now-on-sale-for-the-not-to-be-missed-ladies-night-out-of-2023-',1),(14,'Evalucia: Fourteen Years Of Fashion Show','<p>Our Fourteen Years of Fashion Event will showcase our Autumn 23 Collections, we will kick off&nbsp;the event with a glass of \"Edinburgh gin fizz cocktail\" and canapes, then its time to take your seats for a day of fun, fashion and fundraising for MND Scotland.</p><p>All profit raised from ticket sales and any other fundraising activities will be donated to MND Scotland.</p><p>Please note full names of anyone attending this event in our notes section at checkout- if you could kindly state both their first and surname.</p><p>Should your attendee name change, please use the originally noted name at the door or contact us via email with the name of the person attending.</p><p>We can\'t wait to welcome you to our Fourteen Years of Fashion Event! X</p><p>That Bar&nbsp;145-151 South St, Perth PH2 8NY.</p><p><a href=\"https://evaluciaboutique.co.uk/products/fourteen-years-of-fashion-show\">BOOK HERE</a></p>','Andrew H','2023-05-04 12:14:00',62,1,0,'2023-11-13 14:29:53','2023-11-13 14:29:53','join-us-for-a-day-of-fabulous-fashion-fun-fundraising-and-fizz-',1),(15,'Business Energy Scotland: Get Ready for Winter by Insulating Against High Energy Bills','<p>To provide a comfortable environment for staff and customers, heating is essential. In Scotland it is essential for many months and can be costly – for many businesses, heating costs can account for as much as half of energy bills.</p><p>So, the last thing businesses want to do is to let the precious heat simply go to waste because walls, roofs and floors are poorly insulated.&nbsp;</p><p>The Scottish Government’s SME Loan Scheme is offering eligible businesses, including charities, interest free loans with cashback grants of up to £20,000 .</p><p>Unless the businesses in your network are operating out of modern, well insulated buildings, this free webinar is for them.</p><p><strong>Delegates will:</strong></p><ul><li>Learn how they can check if their current insulation is sufficient.</li><li>Understand typical insulation costs and savings.</li><li>Discover the key steps to a successful insulation project - that will maximise savings and comfort even in hard-to-treat buildings.</li><li>Find out about free support and funding that is currently available.</li></ul><p><strong>Who should attend?</strong></p><p>Ideal for anyone in your network who influences or has direct responsibility for environmental performance, as well as members of management teams engaged in organisational improvement.</p><p><a href=\"https://businessenergyscotland.org/event/get-ready-for-winter-by-insulating-against-high-energy-bills/\">BOOK HERE</a></p>','Andrew H','2023-05-05 12:30:00',62,1,0,'2023-11-13 14:31:52','2023-11-13 14:31:52','help-your-network-get-ready-for-winter-it-s-the-perfect-time-to-act',1),(16,'Perthshire Chamber of Commerce: Star Awards 2023','<p>We are delighted to respectfully announce that entries for our Business Star Awards 2023 are now open and we are thrilled to reveal that Binn Group continue as our main sponsor – we are extremely grateful for this amazing support, which make this event possible. This event takes place at the Crieff Hydro Hotel on Friday 24th November at 1900.</p><p>Applications are open to all businesses in Perthshire/Perth and Kinross and you can enter up to three categories.&nbsp;</p><p>Entries close at&nbsp;<strong>1700 on Thursday 12</strong>th<strong>&nbsp;October</strong>&nbsp;and a shortlist will be announced and winners revealed at the event on the&nbsp;<strong>Friday 24th November</strong>.</p><p>Please see the categories, their descriptions and access to online application below.</p><p>Tickets for the event – with fizz on arrival, a delicious three course meal with wine, coffee and petit fours, hosted awards ceremony, fundraiser and live music with Groove Culture into the wee small hours are available:</p><p>£95+vat pp for a member or £900 + VAT for a table of 10.</p><p>Non-members are £105 + VAT pp or £1000 + VAT for a table of 10.</p><p>Price is per person or bookings of ten to twelve – tables sit from 10-12</p><p><a href=\"https://businessstarawards.com/\">STAR AWARDS WEBSITE</a></p>','Andrew H','2023-05-06 12:35:00',62,1,0,'2023-11-13 14:37:09','2023-11-13 14:37:09','the-2023-star-awards-applications-are-now-open-',1),(17,'SCC QEI: Take Our Latest Chamber Business Survey!','<p>ur quarterly business survey is the largest running in Scotland as well as being among the most well regarded and respected trackers of business sentiment in the Scottish economy.</p><p>Results from the survey are fed into a national picture and shared directly with policymakers in government and across the political spectrum, which support our lobbying for business on your behalf.<br>&nbsp;<br>The&nbsp;<a href=\"https://www.scottishchambers.org.uk/press_policy/chamber-president-issues-wake-up-call-to-governments-as-business-investment-flatlines\">last survey</a>&nbsp;indicated that labour costs are now the biggest cost pressure facing firms, that investment has generally flatlined, and that concern from interest rates is on the rise.<br>&nbsp;<br><strong>Are these issues impacting your business?</strong><br>&nbsp;<br>Let us know by taking&nbsp;<strong>just a few minutes of your time</strong>&nbsp;to share your views in our survey, <strong>to inform our policy platform</strong>.<br>&nbsp;<br>For completing the survey, there is also a chance to win to win either: £100 for a&nbsp;charity of your choice, or a £100 voucher for a supermarket of your choice.</p><p><a href=\"https://bit.ly/SCCQEIQ32023\">TAKE THE SURVEY</a></p>','Andrew H','2023-05-08 12:38:00',62,1,0,'2023-11-13 14:39:55','2023-11-13 14:39:55','scottish-chambers-of-commerce-quarterly-economic-indicator',1),(18,'UK faces stark choice of higher taxes or decline in public services, warns IFS','<p>In an in-depth study of the UK tax system, the Institute for Fiscal Studies thinktank said the already high level of taxes and the weak prospects for growth meant voters faced a tough choice.<br><br>The IFS said if the political choice was to pay higher taxes, root-and-branch reform of the system would be needed to reduce the economic pain that higher levies would involve. This was because every one of the UK’s principal taxes was flawed, it added.<br><br>The report, which was produced in partnership with the innovation foundation Nesta, noted that capital was taxed at a lower rate than income; the income tax system has been made more complex since the Conservatives came to power in 2010; exemptions from VAT cost the exchequer £100bn a year; the council tax system in England and Scotland was based on property valuations dating back to 1991; and environmental levies lacked consistency.</p><p>The thinktank said it was not inevitable that taxes would rise, but added: “Without tax rises, UK public service and benefits provision will not simply tread water, it will deteriorate. Unless levels of tax increase substantially, a reduction in the scope of the public services that the British state provides is likely inevitable.<br><br>“Unless something major changes – such as an acceleration in economic growth – it will not be possible to maintain public services and keep tax at current levels.”</p><p><a href=\"https://www.theguardian.com/politics/2023/aug/24/uk-faces-stark-choice-of-higher-taxes-or-decline-in-public-services-ifs\">ARTICLE</a></p><p><a href=\"https://ifs.org.uk/articles/taxes-will-probably-be-increased-they-must-be-improved\">IFS</a></p>','Andrew H','2023-05-09 12:40:00',62,1,0,'2023-11-13 14:41:13','2023-11-13 14:41:13','britain-faces-a-stark-choice-between-paying-higher-taxes-or-accepting-an-inevitable-deterioration-in-public-services-and-the-welfare-state-a-report-says-',1),(19,'UK interest rates to peak at 5.5% in September, economists predict','<p>A fresh poll of economists by Reuters suggests the Bank will approve a 15th consecutive increase in interest rates at its next meeting on 21 September as part of efforts to combat price inflation, which is still more than three times higher than its 2% target.</p><p>All but one of the 62 economists surveyed said they expected the Bank’s base rate to rise by a quarter of a percentage point next month, taking rates from 5.25% to 5.5%. The only outlier expected a half-point hike, which would take rates to 6%.</p><p>The Bank has been raising rates at a clip in an effort to lower surging inflation, which peaked at 11.1% last October and has since eased to 6.8% in July.</p><p>The Reuters poll shows that economists expect inflation to average at 6.8% this quarter, before falling to 4.7% in the fourth quarter. It is not forecast to drop below the 2% target until at least 2025.</p><p>However, policymakers must consider the consequences of further rate hikes. Higher borrowing costs have weighed on the housing market – as consumers avoid costlier mortgages – and private sector activity across the UK.</p><p><a href=\"https://www.theguardian.com/business/2023/aug/24/uk-interest-rates-to-peak-at-55-in-september-economists-predict\">ARTICLE</a></p><p><a href=\"https://www.reuters.com/markets/rates-bonds/boe-bank-rate-peak-seen-550-strong-chance-575-2023-08-24/\">REUTERS</a></p>','Andrew H','2023-05-09 12:47:00',62,1,0,'2023-11-13 14:48:41','2023-11-13 14:48:41','uk-interest-rates-to-peak-at-5-5-in-september-economists-predict-uk-interest-rates-will-peak-at-5-5-next-month-as-bank-of-england-policymakers-try-to-minimise-the-impact-of-higher-borrowing-costs-on-t',1),(20,'Azets: The Five Building Blocks of Technology for SMEs','<p><strong>1. Technology assessment – what do we need?</strong></p><p>The first building block is carrying out a technology assessment and review, asking ‘what do we need technology to do for the business’?</p><p>As you grow and develop your business you are increasingly likely to come up against a number of resource constraints, whether that is your productive capacity or having enough customers to sell to. Technology can help you find ways of optimising those resources, for example by using automation to free up staff time, helping you pinpoint customer needs, or organising your production flow more efficiently to raise productivity. A key point of harnessing technology is to enable your business to get more out of what it has already and to grow the number of products, services and customers.</p><p>This could be data capture and processing, financial management, forecasting, monitoring cashflow, stock and inventory data. If there are current processes in place to track and monitor this information, the technology and associated processes and procedures can be reviewed to see how the boundaries can be pushed and improvements achieved.</p><p><strong>2. Mindset shift</strong></p><p>There is a requirement from staff across the business to look past the task of implementing the technology and into the benefits that using it will bring.</p><p>There are various ways in which the mindset shift can be dealt with – perhaps it is an incremental approach, a department at a time, for example, the Finance Function, or an update across the whole business in one go.</p><p>Done correctly, and once the mindset has changed and benefits are made tangible, businesses can digitise and make significant advances in a relatively short period of time.</p><p><strong>3. Financial investment</strong></p><p>Thanks to the cloud and digital connectivity, technology has never been more accessible or affordable than it is today. There are some really powerful, inexpensive, accessible software solutions to help every shape and size of SME power up their business. Investing in technology no longer requires a big upfront cost – and the vast majority of technology platforms in the cloud are available on a monthly subscription.</p><p>The cost of simple accounting cloud software, which has a huge number of features and a great amount of capability and connectivity, starts at no more than £25-£30 a month.</p><p>The financial investment should be viewed as exactly that – an investment, not a cost to the business. The long-term gain of adopting and embracing technology gives many benefits – real time and critical business information, forecasting, KPI monitoring, business performance and so on. All of this data in turn helps the business to grow, therefore a critical investment to ensure a business remains on track to achieve its strategic and performance objectives.</p><p><strong>4. Choosing the right technology</strong></p><p>There is a lot of technology and apps available – but SMEs need to start with the basics and understand the needs of their own business and what is required from technology to improve performance and help them grow.</p><p>We have worked with many clients to review business needs and the technology that will help meet objectives.</p><p>Making marginal and progressive improvements can involve one piece of technology that can dramatically improve the data available to a business, in turn helping drive decisions. Therefore, our recommendation would always be to choose the right technology from the start – everything all at once doesn’t necessarily bring all the benefits at once and can have the opposite effect.</p><p>For example, interpreting figures and data to drive strategic decisions is a key benefit of technology, but technology cannot make the decisions – this will still involve people and the right staff to make better, more effective and quicker decisions.</p><p>Technology gives staff and businesses the gift of time to focus on running and growing the business. Technology can plug resource restraints, create capacity for more jobs as the firm grows and needs more staff – ultimately helping the business to grow.</p><p>Azets’ team of trusted business advisors can help SMEs plot and organise the structure so staff feel empowered by the technology and experience the benefits. And our Software Solutions team are experts in matching businesses to software that help SMEs thrive. By working closely with business leaders to understand needs, using our extensive knowledge of the market, we design a bespoke solution that will help you stay compliant, improve your efficiency, connect your people and achieve your commercial goals.</p><p><strong>5. Operational structure and staff</strong></p><p>There is a misconception that technology will take away jobs, however that is not necessarily the case. Technology is an enabler for growth as it takes away the mundane, administrative heavy tasks allowing staff to focus on other activities that drive the business.</p><p><strong>A cyclical process</strong></p><p>Once businesses have completed the first five building blocks, the process starts again. Digital transformation is a journey, a cyclical process and not an overnight one. Once a business and staff are reaping the benefits of technology, the process can begin again to evolve, use more technology to drive further business decisions and make newer technology investments.</p><p>Implementing technology is not solely about buying the technology – there are layers to consider first to make sure technology is applied correctly.</p><p>Azets are platinum partners for all leading cloud software solution providers in the UK and have a unique, strategic partnership with Xero, and use the latest technology across our business to empower our clients and teams. Azets have helped many clients and businesses transform their businesses through technology.</p><p>To find out more about the benefits of implementing technology in your business or for a steer on the next steps to improve on your technology currently, contact Lynne Wilson, by emailing <a href=\"mailto:lynne.wilson@azets.co.uk\">lynne.wilson@azets.co.uk</a> or call 01738 441 888.</p>','Andrew H','2023-05-10 12:49:00',62,1,0,'2023-11-13 14:50:27','2023-11-13 14:50:27','lynne-wilson-accounts-business-advisory-services-partner-discusses-the-five-building-blocks-of-technology-and-how-to-work-through-these-to-transform-and-grow-your-business-the-building-blocks-are-impo',1),(21,'Platinum Partner UHI Perth ASW wins Best Health and Fitness Business in Perthshire','<p>Over 150 businesses were represented across Perth, Dundee, and Angus at Scotland\'s Business Awards. The ASW was recognised for creating and developing a strong sense of community to students, staff and community users across the gym, sport and climbing businesses.</p><p>It was also commended for supporting students into the workplace, offering work-based learning and student employment. It was also praised for the outstanding partnership work it has developed over the last seven years.</p><p>Gareth McKenna, Head of Business Development who collected the award with his ASW colleagues said: “This award is recognition of the work ASW has carried out in the last seven years. We are so thankful to all our loyal customers who have not only supported us throughout this time but took the time to vote for us and sent fabulous testimonials to the Scotland Business Award panel.</p><p>\"I want to especially recognise the role our staff at ASW have played in receiving this award, they have gone above and beyond since we opened, they have shown resilience, a huge work ethic, innovation and at all times have put our customers and members first in their day-to-day work. They deserve great credit for this award and I extremely proud of them, we simply would not have won this award without their commitment. Many thanks to everyone who voted for us, we are very proud.\"</p><p>ASW will now go to Glasgow to represent Perthshire in the National Finals in Glasgow in October.</p>','Andrew H','2023-05-11 12:51:00',62,1,0,'2023-11-13 14:52:54','2023-11-13 14:52:54','last-night-at-a-glittering-black-tie-ceremony-in-dundee-the-academy-of-sport-and-wellbeing-asw-picked-up-the-top-award-for-the-best-health-and-fitness-business-in-perthshire-',1),(22,'Craighead Wind Farm - Opportunities for Local Businesses and Suppliers','<p>Renewable energy company <strong>Galileo</strong> is proposing a wind farm of up to 10 turbines (up to 60MW) near <strong>Carnbo</strong> in Kinross-shire. It is committed to ensuring,&nbsp;wherever reasonably practicable,&nbsp;&nbsp;local contractors and employees are used in all aspects of wind farm development.</p><p>These include opportunities for construction, fencing, drainage and forestry contractors, as well as local hospitality providers, such as hotels and B&amp;Bs.</p><p>Galileo is keen to hear from local businesses who may be able to offer skills and services to Craighead Wind Farm. If you are a local business and would like to know more about opportunities for the local supply chain, please contact us at [craighead@galileoenergy.uk]craighead@galileoenergy.uk</p><p>Further information on the development is available on the website at&nbsp;<a href=\"http://www.craigheadwindfarm.co.uk/\">www.craigheadwindfarm.co.uk</a>. This also has details of the proposed renewable electricity discount scheme (REDS), with those closest to the development receiving a discount on their electricity bills (subject to consultation).</p><p>&nbsp;</p><p><img src=\"https://perthshirechamber.co.uk/site/assets/files/5290/craighead_wind_farm_site-layout-plan_v1_0.jpg\" alt=\"\"></p>','Andrew H','2023-05-11 12:53:00',62,1,0,'2023-11-13 14:55:48','2023-11-13 14:55:48','renewable-energy-company-galileo-is-proposing-a-wind-farm-of-up-to-10-turbines-up-to-60mw-near-carnbo-in-kinross-shire-it-is-committed-to-ensuring-wherever-reasonably-practicable-local-contractors-and',1),(23,'Platinum Partner Thorntons Helps Davidsons Chemists Continue Expansion Plans Following Seven Figure Finance Deal','<p>The business now owns 56 pharmacies including the five new acquisitions. Two are located in Dundee, and one each in Kirriemuir, Montrose and Auchterarder – where it now owns the town’s two chemists.</p><p>It has now commenced a rebrand of the new premises, which are gaining new exterior signage and in-store customer communications.</p><p>It has also completed the recruitment of three new pharmacist managers for the branches which were being operated by a locum. Their appointments will enable Davidsons to restore and upgrade their operations as well as provide greater certainty for local communities.</p><p>Allan Gordon, managing director, Davidsons Chemists, said: “We are making excellent progress with our five new branches, which we are rebuilding as valued local resources that will provide first class community healthcare. Our new pharmacist managers are providing much-needed structure and continuity and anecdotally, we have had great feedback from customers.</p><p>“As a business, we have significantly strengthened our position across the Tayside and Perthshire area following the acquisition from Lloyds.</p><p>“Thorntons and its knowledgeable team made the process as smooth as it could be, and we thank everyone involved for their support.”</p><p>Davidsons, which provides a wide range of pharmacy services including prescriptions, vaccinations, smoking cessation and minor ailment care, is headquartered in Blairgowrie where its first branch opened in 1897.</p><p>Thorntons Partner, Healthcare team, Kim Campbell, said: “Davidsons Chemists’ acquisition is a great step forward for an ambitious, growing healthcare business. It’s extremely rewarding to have played a role in bringing these five branches into its ownership, which is set to have a positive impact on both the business and local communities.</p><p>“We wish Davidsons’ management team every success as they incorporate the new branches and develop the business.”</p><p><a href=\"https://www.thorntons-law.co.uk/knowledge/davidsons-chemists-continues-expansion-plans-following-seven-figure-finance-deal\">ARTICLE</a></p>','Andrew H','2023-05-12 12:56:00',62,1,0,'2023-11-13 14:56:57','2023-11-13 15:04:33','national-independent-pharmacy-chain-davidsons-chemists-has-revealed-its-plans-for-five-new-branches-acquired-from-lloyds-in-a-substantial-seven-figure-deal-supported-by-leading-independent-law-firm-th',1),(24,'Celebrating Local with Launch of Star Awards!','<p>BUSINESSES large and small, new and established, rurally and centrally located throughout Perthshire have a chance to shine brightly once more with the launch of the 2023 Business Star Awards sponsored by Binn Group.</p><p>The Perthshire Chamber of Commerce event – one of the most eagerly anticipated on the business calendar – takes place at Crieff Hydro on Friday November 24th.</p><p>And businesses throughout the area are urged to nominate themselves and their stars to light up this glittering event celebrating all things local.</p><p>Perthshire Chamber chief executive Vicki Unite said:<br>“The trading environment remains challenging, and the creativity and drive shown by our business community is quite astounding. &nbsp;Innovation and grit has seen some of our businesses grow and adapt and so many businesses and individuals continue to do so much for our local economy and communities. &nbsp;</p><p>“It is always an absolute privilege to be able to shine the spotlight on some of our area’s success stories and acknowledge the sheer hard work, determination and humanity being demonstrated on a day-to-day basis.</p><p>“We are absolutely delighted to partner with Binn Group again as our Main Sponsor who are a shining example of supporting local and driving business locally, showing constant innovation and staying at the forefront of their industry - really putting Perthshire on the map.”</p><p>Allan MacGregor, Chief Executive of family business Binn Group, always champions local (and also includes this call to action to others during his annual speech at the awards dinner) and acknowledges the importance of this unique event in recognising and rewarding Perthshire successes.</p><p>“I like to keep business local, as far as possible,” he said, “and I think the Chamber is an important asset to the local economy.&nbsp;</p><p>“The Chamber’s priority is Perthshire, and the organisation is a vast and valuable network of business people who share that same passion. &nbsp;</p><p>“Supporting local has always been at the heart of the Binn Group and that is why we are involved with the Perthshire Chamber.”</p><p><i>Binn Group is Scotland’s leading recycling and resource management company.</i><br><i>Family run, with over 20 years of expertise, they are a people centred business, with over 160 employees with this figure likely to increase significantly once work gets underway on its energy from waste (EfW) plant at its EcoPark.</i></p><p>“If you work in the local area, I think you should support other businesses in your area,” he said.</p><p>“The Star Awards showcases superb local businesses and provides the people involved, whether finalists or winners, with a real boost.”</p><p>Tickets for the event, hosted by tv and radio broadcaster Kaye Adams, with fizz on arrival, a delicious three course meal with coffee and petits fours, awards ceremony, fundraiser and live music with Groove Culture into the wee small hours are available:<br>&nbsp;<br>£95+vat pp for a member or £900 + VAT for a table of 10.</p><p>Non-members are £105 + VAT pp or £1000 + VAT for a table of 10.</p><p>Full details of all the award categories and further information can be found at <a href=\"http://www.businessstarwards.co.uk\">www.businessstarwards.co.uk</a>&nbsp;</p><p>Entries close on Friday 13th October at 1700 and can be made online at <a href=\"http://www.businessstarawards.co.uk\">www.businessstarawards.co.uk</a>. &nbsp;The Chamber can be contacted on 01738 448325, emailed at: <a href=\"mailto:events@perthshirechamber.co.uk\">events@perthshirechamber.co.uk</a> or online at: <a href=\"http://www.perthshirechamber.co.uk\">www.perthshirechamber.co.uk</a>.</p><p>Business Star Award Categories Open for Entries 2023<br>&nbsp;&nbsp; &nbsp;<br>1&nbsp;&nbsp; &nbsp;Employee of the Year Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>2&nbsp;&nbsp; &nbsp;Apprentice of the Year Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>3&nbsp;&nbsp; &nbsp;Most Promising New Business Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>4&nbsp;&nbsp; &nbsp;Excellence in Customer Service Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>5&nbsp;&nbsp; &nbsp;Excellence in Business Innovation Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>6&nbsp;&nbsp; &nbsp;Excellence in Digital Media Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>7&nbsp;&nbsp; &nbsp; &nbsp;Commitment to the Environment Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>8&nbsp;&nbsp; &nbsp;Commitment to the Community Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>9&nbsp;&nbsp; &nbsp;Excellence in Tourism &amp; Leisure Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>10&nbsp;&nbsp; &nbsp;Beyond Scotland Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>11&nbsp;&nbsp; &nbsp;Business Growth Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>12&nbsp;&nbsp; &nbsp;Independent Retailer of the Year Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>13&nbsp;&nbsp; &nbsp;Excellence in Food &amp; Drink Produce Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>14&nbsp;&nbsp; &nbsp;Employer of the Year Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>15&nbsp;&nbsp; &nbsp;Health and Wellbeing Business of the Year Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>16&nbsp;&nbsp; &nbsp;Outstanding Young Business Person&nbsp;</p>','Andrew H','2023-05-15 13:05:00',62,1,0,'2023-11-13 15:06:13','2023-11-13 15:06:13','calling-all-perth-and-kinross-businesses-',1),(25,'Golf Day 2023 Results','<p>After hot rolls, tea and coffee, and a warm welcome, players set off on the renowned, Championship Murrayshall parkland course for an excellent round of golf, followed by a two-course meal in the clubhouse.</p><p>The event saw entrants compete for a raft of titles including Winning Team, Winning Individual, Yellow Ball, Nearest the Pins and Longest Drive.</p><p>The Winning Team title was claimed this year by a team of new friends coming together on the day consisting of (l to r) Perthshire Local’s Iain Fenwick, Kelvin Bristol, David Codling and Merlin’s David Morrison who each took home the Carbon Winning Team Trophy and a game of golf for four each, generously donated by King James VI Golf Club and Strathmore Golf Club.</p><p>The Winning Individual was Tom McLevy of the Graham Environmental Services team who won the Chamber Millennium Trophy plus a four ball with hospitality kindly donated by Murrayshall Country Estate.</p><p>Winners of our Yellow (Red) Ball competition were the team from Graham + Sibbald (Keith Scobbie, James Andrew, Paul Keith and Andy MacDonald) who won the Rosebowl and a bottle of 1881 Distillery &amp; School Gin donated by Crieff Hydro.</p><p>Taking home the title of Longest Drive (Man) Winner was David Morrison of Merlin who won a golf lesson donated by Limetree.</p><p>The Longest Drive (Lady) Winner was Lesley Mearns of the Thorntons Solicitors and Limetree Team who traded her prize (tickets for the Tartan Exhibition at the V&amp;A kindly donated by Thorntons) with Eileen of Limetree for a Golf Lesson.</p><p>The Winner of Nearest the Pin was Gareth McKenna of UHI Perth who took home a bottle of whisky donated by Flonix Ltd.</p><p>Vicki Unite, chief executive of Perthshire Chamber, said: \"We were delighted to bring our annual golf day to Murrayshall and we are very grateful to Gary Silcock and his team at Murrayshall for being such great hosts.&nbsp; A huge thank you, once again, goes to Allan Chappell of Hardies Property &amp; Construction Consultants for managing all the teams and scoring on the day, we couldn’t do it without his support.</p><p>&nbsp;</p><p>“Thank you also to those who donated prizes including King James VI Golf Club, Strathmore Golf Club, Murrayshall, Limetree, Thorntons, Flonix and Crieff Hydro.</p><p>“The significant support offered also by all those who brought teams and played with us on the day is very much appreciated and it was a pleasure to meet and have the chance to talk to everyone at the half way house over a cool drink.”</p><p><strong>RESULTS:</strong></p><p>Our Winning Individual today is Tom McLevy of the Graham Environmental Services team!&nbsp;Congratulations! Tom took home the Chamber Millennium Trophy, a 4 ball with hospitality donated by Murrayshall Country House Hotel &amp; Golf Club and some golf goodies. His prize was collected by his teammates (l to r) Charlie Gallagher and Phil McKenna.</p><p>&nbsp;</p><p>Winner for Nearest the Pin was Gareth McKenna of UHI Perth who took home a bottle of whisky donated by Flonix Ltd and some golf goodies.</p><p>&nbsp;</p><p>Taking home the title of Longest Drive (Man) Winner was David Morrison of Merlin who won a golf lesson donated by Limetree and some golf goodies.</p><p><img src=\"https://perthshirechamber.co.uk/site/assets/files/5294/winning_team_merlin_square.jpg\" alt=\"\"></p><p><img src=\"https://perthshirechamber.co.uk/site/assets/files/5294/winning_individiual_tom_levy_and_prize_giving_square.jpg\" alt=\"\"></p><p><img src=\"https://perthshirechamber.co.uk/site/assets/files/5294/winning_longest_drive_ladies_lesley_mearns_of_thorntons_caption.jpg\" alt=\"\"></p><p><img src=\"https://perthshirechamber.co.uk/site/assets/files/5294/winner_nearest_pin_gareth_mckenna_of_uhi_perth_caption.jpg\" alt=\"\"></p>','Andrew H','2023-05-16 13:06:00',62,1,0,'2023-11-13 15:09:15','2023-11-13 15:10:35','golfers-enjoyed-a-warm-and-sunny-afternoon-at-perthshire-chamber-s-annual-golf-day-which-took-place-at-murrayshall-country-estate-last-friday-1st-september-',1),(26,'Great Glen Challenge on Track to Reach £50,000 Target for RSABI','<p>The event was fully booked with the maximum of 25 teams from a wide range of roles in Scottish agriculture taking part in a challenging day of outdoor sport, testing endurance and fitness, as well as offering a great opportunity for teambuilding and camaraderie.</p><p>The event, sponsored by expert legal advisors to the rural sector, <strong>Gillespie Macandrew</strong>, took place in a stunning setting between Fort Augustus and Fort William. It saw sponsored teams take on a demanding route consisting of a 49km mountain bike, 6km kayak, 18km walk, and 17km run.</p><p>The annual challenge is designed to raise awareness of the work of the charity as well as the importance of teamwork and physical fitness for mental and physical wellness, promoting commitment and teamwork from the onset of training right up to race day.</p><p>Alongside training and competing, the teams have worked hard to fundraise in a bid to help RSABI, the charity which supports people in Scottish agriculture, reach the ambitious target of £50,000, which will help the charity provide emotional, practical and financial support to people in Scottish agriculture.</p><p>So far, a fantastic total of nearly £49,000 has been raised by those taking part and RSABI is encouraging supporters to dig deep and help in a bid to reach its target over the coming week.</p><p>“The Great Glen Challenge 2023 really was an exceptional event, with an outstanding effort made by people from all different parts of our industry. We are so grateful to our sponsors and to everyone who took part, helped teams to train or came along to support on the day,” said Carol McLaren, Chief Executive of RSABI.</p><p>“We are also very grateful to our trustees and volunteers who got their sleeves rolled up and helped us set the event up and derig afterwards in a range of weathers from sunshine to downpours, with a lively band of midges who kept us company for much of the day!”</p><p>Alan White, partner in the land and rural business team at Gillespie Macandrew, sponsors of the event, presented the prizes to individuals and teams at a post-event reception at the iconic Neptune’s Staircase, Banvie.&nbsp; He commented: “We were pleased to sponsor this fantastic event.&nbsp; As longstanding advisors to the sector, we are all too familiar with the challenges facing those working in agriculture and just how invaluable the work of the RSABI is in providing support.&nbsp; Our teams thoroughly enjoyed the challenge and the opportunity to spend time with their peers in glorious surroundings.”</p><p>The overall team winner was Scottish Woodlands, with last year’s winners Shannoch, taking second team place, followed by the Royal Bank of Scotland in third.</p><p>Individual awards were made to Edward Fletcher (mountain biking) of Galbraith Giants, Mark Donald (kayaking) of NFU Team 2, David Michie (running) of NFU Team 1 and walking (joint first place) Rebecca Drummond of Team Shannoch, Neil White of Scottish Woodlands and Andy Glasgow of Royal Bank of Scotland.&nbsp;</p><p>Participating teams included Bank of Scotland, Bell Ingram, Bidwells LLP, the Crofting Commission, Davidson &amp; Robertson, Galbraith, Gillespie Macandrew, James Hutton Institute, Johnston Carmichael, NFU Scotland, Royal Bank of Scotland, SAC Consulting, SAYFC, Scottish Woodlands, SP Energy Networks, Tarff Valley, Thomson Cooper Accountants, Thorntons, and Virgin Money.</p><p>RSABI’s freephone Helpline - 0808 1234 555 - is available 24 hours a day, seven days a week and calls won’t show up on phone bills. All enquires are treated as confidential by the organisation’s friendly, professional team. You can make contact online on a range of social media platforms including Twitter, Facebook and Instagram and you can also reach RSABI via the webchat function on its website <a href=\"http://www.rsabi.org.uk/\">www.rsabi.org.uk</a> 24 hours a day.</p><p><a href=\"http://www.gillespiemacandrew.co.uk\">Gillespie Macandrew</a></p>','Andrew H','2023-05-17 13:10:00',62,1,0,'2023-11-13 15:13:05','2023-12-18 07:43:28','rsabi-the-charity-which-supports-people-in-scottish-agriculture-is-sending-a-message-of-thanks-to-the-sponsors-teams-supporters-and-volunteers-who-made-its-annual-fundraising-event-on-friday-such-a-hu',1),(27,'T\'Go Creative is on the Move!','<p>Their team has moved to their shiny&nbsp;new studio in&nbsp;the old&nbsp;<strong>Perthshire Advertiser</strong>&nbsp;building in Perth’s city centre.&nbsp;</p><p>For all things design, print, digital marketing, clothing and merch printing, website design (and everything in between), you will find them at</p><p><strong>56-58 Watergate, Perth, PH1 5TF&nbsp;</strong></p><p>With so many things planned for T’Go Creative this year, they can’t wait to introduce some exciting new services and offerings - including a shiny new shop for their new clothing brands -&nbsp;<a href=\"https://bigairclothing.com/\">BIG Air and TRN Air</a><a href=\"https://tgocreative.us2.list-manage.com/track/click?u=5692fecc1c725acfb42b00a1a&amp;id=ad060ab2bb&amp;e=2467c3af77\"><strong>&nbsp;Activewear</strong></a><strong>&nbsp;</strong>- the perfect clothing range for all you&nbsp;extreme sports and active enthusiasts!&nbsp;</p><p>To celebrate our next chapter, they\'ll be sharing some exclusive opening offers soon so keep an eye on your inbox from future emails from the T\'Go team.<br><br>Stay in the loop with the latest news and updates&nbsp;by following them on their&nbsp;<a href=\"https://www.facebook.com/tgocreative\">Facebook</a>,&nbsp;<a href=\"https://www.linkedin.com/company/tgocreative/\">LinkedIn</a><strong>&nbsp;</strong>and&nbsp;<a href=\"https://www.instagram.com/tgocreative_design_print_web/?hl=en\">Instagram</a>&nbsp;channels. They’ll see you there &amp; they&nbsp;can\'t wait to welcome you to their&nbsp;new premises!</p>','Andrew H','2023-05-18 13:13:00',62,1,0,'2023-11-13 15:14:51','2023-12-18 07:43:28','t-go-has-moved-studio-',1),(28,'Perth and Kinross Council: External Funding Team launches Employability Challenge Fund 23/24','<p>The team are offering drop-in sessions - see below for available sessions – to book a place please send an email and they will issue you the appointment.</p><p>The External Funding Team are about to launch the Employability Challenge Fund for 23/24. They will be holding online drop-in sessions to answer any questions that you may have.</p><p>The sessions will be:</p><p>Wednesday 20th September<br>2.30pm</p><p>Thursday 21st September<br>10.30am</p><p>Friday 22nd September<br>10.00am</p><p><a href=\"mailto:ExternalFunding@pkc.gov.uk\">ExternalFunding@pkc.gov.uk</a></p>','Andrew H','2023-05-17 13:16:00',62,1,0,'2023-11-13 15:19:18','2023-12-18 07:43:28','this-fund-is-aimed-at-third-sector-delivery-agent-organisations-who-are-interested-in-funding-for-those-furthest-away-from-the-job-market-child-poverty-family-support-and-numeracy-skills-development-',1),(29,'Elevator: Design Thinking - Mini Accelerator Programme for Perth & Kinross','<p>Drawing on the very best Design Thinking practices from around the world including UK Design Council, D.School, and the Global Design Thinking Alliance, you’ll be part of a fully immersive design-led innovation and enterprise programme.</p><p>All workshops will take place, in person, at the Famous Grouse Ideas Centre, WASPS Perth Creative Exchange, Stormont Street, Perth PH1 5NW</p><p>Our three interlinked workshops sessions will run:</p><p>Tuesday 21st November (10am – 5pm)<br>Wednesday 22nd November (10am – 5pm)<br>Tuesday 5th December (10am –5pm)</p><p><a href=\"https://www.elevatoruk.com/accelerators/winter-warmer/\">REGISTER HERE</a></p>','Andrew H','2023-05-18 13:19:00',62,1,0,'2023-11-13 15:20:51','2023-12-18 07:43:28','design-thinking-is-a-creative-approach-to-problem-solving-that-is-being-adopted-by-world-leading-companies-of-all-sizes-to-drive-innovation-and-improve-customer-experience-if-you-re-looking-to-stay-ah',1),(30,'Multi-Award Winning Restaurant Tabla Double Winner 2023','<p>This “Takeaway of the year award” holds a special place for Tabla since we have previously won awards for Chef of the Year, Restaurant of the Year, Outstanding Curry of the Year, and Entrepreneur of the Year. Winning the Takeaway Award is particularly meaningful as it is the first time since 2009 that we have won in this category.&nbsp;</p><p>Our business primarily focuses on providing a dine-in experience. However, due to the challenges posed by the rising cost of living, we have pivoted our business to accommodate dining at home in 2022.&nbsp;<br>Our Customers have greatly received this new focus. - Praveen Kumar</p><p><a href=\"https://tablarestaurant.co.uk/\">WEBSITE</a></p><p><img src=\"https://perthshirechamber.co.uk/site/assets/files/5300/tabla_asian_restaurant_awards_2023.jpg\" alt=\"\"></p>','Andrew H','2023-05-19 13:21:00',62,1,0,'2023-11-13 15:21:56','2023-12-18 07:43:27','tabla-wins-restaurant-of-the-year-2023-from-asian-restaurant-awards-take-away-of-the-year-2023-from-spice-awards-',1),(31,'SCC - Westminster Inquiry Into Air Services Between Scotland & London','<p>It has been brought to their attention that there has been an ongoing issue with punctuality in cross border routes and that this is having an impact on Scotland’s business community and its ability to access appointments and meetings in London and beyond.</p><p>They are therefore interested to learn if Scottish businesses have encountered difficulties in their experiences with Scottish air services to London.</p><p>They have put to the SCC the following three questions:</p><ul><li>What is the current view of punctuality of flights to and from Scottish airports?</li><li>How has this changed over the last 3, 10, 15 and 20 years?</li><li>How has punctuality of airlines to and from Scottish airports affected your members’ business activities including but not limited to: Meetings, Trade and Connecting travel?</li></ul><p>If this is something that you have experience or knowledge of, please do share views on this to inform the SCC response.</p><p>Similarly, if you know of members who have reported such issues, please feel free to share their views and this request / advise them to get in touch.</p><p>The SCC would ideally like any views back by 10th October at the latest.</p><p>Email Perthshire Chamber of Commerce <a href=\"mailto:info@perthshirechamber.co.uk\">info@perthshirechamber.co.uk</a> and we will pass your concerns on to the SCC.</p>','Andrew H','2023-05-20 13:22:00',62,1,0,'2023-11-13 15:23:11','2023-12-18 07:43:27','the-scottish-affairs-committee-at-westminster-has-contacted-the-scottish-chambers-of-commerce-regarding-the-punctuality-of-flights-between-scotland-and-london-',1),(32,'Scottish Youth Film Festival comes to Perth!','<p>Distinguished guests, including the acclaimed actors Andrew Rothney and Sara Vickers, visionary Directors Raisah Ahmed and Andrew Cumming, and an array of other prominent figures from the Scottish film industry will grace this magnificent festival!</p><p>&nbsp;</p><p>Hosted at the North Inch Community Campus in Perth, this year\'s festival promises not only an enriching cinematic experience but also a wonderful opportunity to connect with like-minded individuals who share a passion for storytelling and filmmaking.</p><p>&nbsp;</p><p><strong>Celebrating Scotland\'s Young Filmmakers</strong></p><p>The Scottish Youth Film Festival has firmly established itself as the premier platform for showcasing the creative talents of Scotland\'s budding filmmakers. With a rich tradition of celebrating innovation, storytelling, and artistic expression, this year\'s event promises to be a highlight for young filmmakers across Scotland.</p><p>&nbsp;</p><p><strong>The festival\'s diverse program includes:</strong></p><p><strong>-Screenings:</strong> Immerse yourself in a captivating selection of films created by Scotland\'s emerging young talents. From gripping narratives to thought-provoking pieces, the festival will showcase a wide range of cinematic talent.</p><p><strong>-Panels:</strong> Network with industry experts, filmmakers, and educators as they delve into the world of filmmaking. Gain insights, knowledge, and inspiration from those who have made their mark in the industry.</p><p><strong>-Workshops:</strong> Hone your filmmaking skills in hands-on workshops led by experienced professionals. Whether you\'re interested in acting, directing, cinematography, animation, or special effects, there\'s a workshop tailored to your interests.</p><p><strong>-Talks:</strong> Discover the secrets of sound design, the art of directing, and what it\'s like to work for a animation studio in our incredible program of industry guests.</p><p><strong>-Annual Awards Show:</strong> The festival\'s crowning moment is the much-anticipated awards show, where outstanding young filmmakers will be recognised for their exceptional short films. Be there to witness the future stars of the industry receiving their well-deserved praise.</p><p>&nbsp;</p><p><strong>Book Your Free Tickets Now!</strong></p><p>One of the most exciting aspects of this year\'s festival is that tickets are absolutely free! However, due to the overwhelming demand, early booking is strongly recommended. Don\'t miss your chance to be part of this extraordinary celebration of youth talent and creativity!</p><p>To secure your spot, simply visit the <a href=\"https://www.eventbrite.com/e/scottish-youth-film-festival-tickets-694647468277\">official festival Eventbrite</a>.</p><p>There, you\'ll find all the information you need, including the full festival schedule, ticket details, and the latest updates. Make sure you book onto your workshops as tickets fly fast!</p><p>Book your <a href=\"https://www.eventbrite.com/o/developing-the-young-workforce-tay-cities-52491465053\">workshops here</a>.</p><p>&nbsp;</p><p><strong>Exclusive Workshops and Special Events</strong></p><p>In addition to the festival\'s main attractions, there are exclusive workshops and special events that promise to further enrich your festival experience. These events include:</p><p>&nbsp;</p><p><strong>-Scriptwriting:</strong> Finding Your Stories: Dive into the art of scriptwriting and learn how to bring your stories to life on the screen.</p><p><strong>-Exploring the World of Production: </strong>Get an insider\'s perspective on the world of film production and discover the magic that happens behind the scenes.</p><p><strong>-Under the Camera: Cut-Out Animation:</strong> Explore the enchanting world of cut-out animation and bring your characters to life frame by frame.</p><p><strong>-Acting for Screen:</strong> Unleash your acting talents on screen and learn the techniques that make performances truly shine in film.</p><p><strong>-Creating Practical SFX for Camera:</strong> Step into the realm of special effects and discover how to craft stunning visual effects that enhance your storytelling.</p><p><strong>-Under the Camera:</strong> Object Animation: Explore the fascinating world of object animation and bring inanimate objects to life through the lens of a camera.</p><p><strong>-LS Productions:</strong> Rohan Crickmar: Gain valuable insights from Rohan Crickmar, a key figure in LS Productions, and delve into the dynamic world of film production.</p><p>&nbsp;</p><p>For more details, visit the festival\'s <a href=\"https://syff.scot/festival/\">official website</a>.</p><p>And check out their <a href=\"https://www.youtube.com/watch?v=35yXhYE5n7Y&amp;ab_channel=ScottishYouthFilmFoundation\">promotional video here</a>.</p><p>&nbsp;</p><p>Stay connected with the festival on social media by following @ScottishYouthFilmFestival on Facebook, Instagram, and Twitter for the latest news and announcements.</p><p>&nbsp;</p><p>Join us on September 30th at the North Inch Community Campus in Perth, and let\'s celebrate the boundless creativity and talent of Scotland\'s young filmmakers. The Scottish Youth Film Festival awaits you with open arms, ready to immerse you in a world of cinematic wonders. Don\'t miss out on this unforgettable experience!</p><p>&nbsp;</p><p>About the Scottish Youth Film Festival:</p><p>The Scottish Youth Film Festival is an annual event dedicated to showcasing the talents of young filmmakers living in Scotland. Established to promote creativity, storytelling, and innovation in cinema, the festival provides a platform for emerging talent to meet their peers, network and celebrate the work of Scotland’s next generation of film talent. The festival is run by the Scottish Youth FIlm Foundation and funded by partners including Screen Scotland and The Sean Connery Foundation.</p><p>&nbsp;</p><p><img src=\"https://perthshirechamber.co.uk/site/assets/files/5303/syff_festival_2023_timetable.png\" alt=\"\"></p>','Andrew H','2023-05-22 13:23:00',62,1,0,'2023-11-13 15:25:07','2023-12-18 07:43:27','in-a-much-anticipated-return-the-scottish-youth-film-festival-is-back-for-another-remarkable-year-promising-to-be-bigger-and-better-than-ever-before-scheduled-for-saturday-september-30th-this-cinemati',1),(33,'Appeal launched to save St John’s Kirk of Perth','<ul><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>900-year-old Kirk where John Knox sparked the reformation is in crisis</strong></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>£4 million restoration bill looms for Perth’s most historic building</strong></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>The Kirk of Kings threatened by soaring costs</strong><br><br>A £4 million appeal is being launched to save Perth’s oldest and key historic building.</li></ul><p>St John’s Kirk has dominated the Fair City skyline for nearly nine centuries but now the ancient heart of Perth is under threat as repair and renovation costs spiral.</p><p>A leaking spire and belfry, decaying masonry, roof deterioration and compromised stained-glass window casings are among the growing catalogue of necessary repair works facing the Kirk. And while the Kirk session and the Trust of St John’s Kirk of Perth have shouldered emergency repairs to date, funds are running out and a “Save St John’s Kirk” appeal has been set in motion.</p><p>Session Clerk Bill Wilson said the time had come to appeal for help to a wider audience.</p><p>“St John’s Kirk has a special place in the hearts of so many,” he said. “It has been a centre of worship for nearly 900 years and played a pivotal role in the history and development of Perth.</p><p>“Marriages, christenings, funerals, civic and public events and landmark Royal and historic occasions have all taken place within these ancient walls and its impact and influence have stretched far beyond Perth’s city boundary – both nationwide and internationally.</p><p>“Hopefully, its ongoing role and historic significance will not be lost on those keen to ensure its survival.”</p><p>Crisis talks have already taken place with key stakeholders and an outline strategy has already been developed with a full business plan due to be finalised by the end of the year.</p><p>Maureen Young, chair of the Trust of St John’s Kirk of Perth, which has driven fundraising for the maintenance of the building since 1951, said the future of the landmark kirk was every bit as important as its past.</p><p>“St John’s Kirk is the heart of Perth in every sense,” she said. “Millions have been spent on creating a world-class tourist destination housing the Stone of Destiny at the former City Hall - due to open next year - and it’s vital that the new museum’s Medieval neighbour is protected and promoted to ensure Perth’s oldest and newest attractions sit side-by-side in pristine condition.</p><p>“Recent faults and failings identified by a series of expert surveys suggest St John’s Kirk needs special attention,” added Maureen. “The cash-strapped Church of Scotland is unlikely to provide support funding, but a future where this glorious building is allowed to decay and die is unthinkable and that’s why a special appeal has been launched to identify and secure funding streams to safeguard it for generations to come.</p><p>“The Trust is also keen to employ a Project Manager to help fundraise, oversee works and evolve a future programme of events and tourist and community engagement to enrich the life of the church,” she said. “We are actively seeking suitable candidates now.</p><p>“We’re delighted – and extremely grateful - that Brigadier Sir Mel Jameson, immediate past Lord Lieutenant of Perth and Kinross, has agreed to chair our appeal committee and drive a fundraising focus in support of our strategic plan for the future of St John’s which will not only repair and restore the building itself but also create a vibrant and popular venue for all.”</p><p>Ahead of the launch of the public appeal in the Kirk today (Friday), Sir Mel said he was happy to play a role in ensuring Perth’s most important building was protected and promoted – celebrating its past glories and shaping its function and form into the future.</p><p>“St John’s Kirk is one of Scotland’s most important church buildings,” he said. “It has a wealth of history within its ancient walls – from medieval to modern times – and plays a vital role in both civic and congregational life in Perth.</p><p>“It houses Perth and Perthshire war memorials and is the spiritual home of The Black Watch as well as boasting Scotland’s largest carillon of 35 bells.</p><p>“Windows, pews, pillars and crypts all pay homage to famous local families and historic organisations and institutions including the Guildry, Freemasonry and local council,” he added. “And, perhaps most famously, it was the site of John Knox’s inflammatory sermon in 1559 which ignited the Reformation in Scotland.</p><p>“It is also the Kirk of the Kings, visited and supported over the centuries by a string of royals from David I to the late Queen Elizabeth II.”</p><p>While highlighting the historic importance of St John’s Kirk, Sir Mel said the focus of the £4 million appeal was on the future.</p><p>“We want to safeguard St John’s both as a place of worship and occasion and as a vibrant, living centre for tourists, events, concerts, civic occasions and public celebrations,” he said. “At first glance the building looks magnificent but at 900 years old, she’s an Old Lady in trouble – one that needs our help to secure a future where St John’s continues to play a central role in the life of the city. We cannot allow the building to deteriorate further, and hope individuals and organisations will rally behind our appeal and Save St John’s.”</p><p>Repair works will progress in accordance with funds available with emergency repairs tackled first.</p><p>The appeal has already attracted political concern with local MSP John Swinney saying St John’s was “absolutely central” to the identity of Perth.</p><p>“The deterioration of St John’s Kirk has to be avoided at all costs,” he said. “It sits in the very heart of the city, adjacent to what will be one of the country’s most significant tourist attractions so it is vital the future of the Kirk is assured so that it can be part of the revival of Perth’s city centre.</p><p>“We can’t afford to turn our backs on such a significant building,” he said. “We have to corral different funding streams to help, and I am very happy to put my shoulder to the wheel and help where I can.”</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p><img src=\"https://perthshirechamber.co.uk/site/assets/files/5304/freepic_stjohnskirk-2.jpg\" alt=\"\"></p>','Andrew H','2023-05-22 13:25:00',62,1,0,'2023-11-13 15:26:51','2023-12-18 07:43:27','a-4-million-appeal-is-being-launched-to-save-perth-s-oldest-and-key-historic-building-',1),(34,'Perthshire Adventure Park Announces \'ultimate Passes\' for Families This Autumn','<p>ONE OF Scotland’s best loved activity parks <a href=\"https://www.actionglen.co.uk/\">Action Glen</a> has announced two brand-new day passes for both families and thrill seekers alike to enjoy this autumn.</p><p>From Friday 29 September until Sunday 5 November, visitors will be able to unlock access to an incredible 15 rip-roaring activities during just one visit, thanks to <a href=\"https://www.actionglen.co.uk/tickets/\">Glen’s Activity Day Pass.</a></p><p>Daredevils will have the chance to set their pulses racing in a thrilling game of woodland combat, before soaring among the stunning Perthshire tree line on the Aloft zip lines and testing their nerve in a skilful archery session as part of the huge range of activities the ticket offers.</p><p>Meanwhile, for those who prefer to keep both feet firmly on the ground and cheer on from a distance, visitors can opt for <a href=\"https://www.actionglen.co.uk/tickets/\">Glen’s Adventure Day Pass</a> which includes unlimited access to Glen’s Adventure Park and its impressive crazy golf course.&nbsp;</p><p>The limited-time day passes are being run as part of a new ticketing trial for Action Glen, with the team hopeful it will streamline the way guests book their activities in the future.</p><p>Michael Crawford, manager of Action Glen, said: “We’re really excited to see how Glen’s Activity and Adventure Day Passes will open up a world of adventure for our guests.</p><p>“Instead of booking each activity individually, our brand-new ticketing options will make sure our adventurers get the most out of their time with us.</p><p>“Whether you are a thrill seeker who is keen to throw yourself into as many activities as possible, or a top cheerleader enjoying the action from the sidelines, these really are the ultimate activity passes for absolutely anyone visiting Action Glen this autumn.”</p><p>There are a huge range of activities included in Glen’s Activity Day Pass, including: Aloft Treetop Adventures (aged 7+); archery (ages 6+); air rifles (8+); axe throwing (ages 12+); woodland combat (ages 6+); Pinzgauer safari (ages 3+); Glen’s Adventure Park (ages 3+); Mini Land Rovers (ages 3+); quad pods (ages 3+); crazy golf (ages 3+); disc foot/rugby/golf (ages 3+) and zip line (ages 7+).</p><p>Meanwhile, Glen’s Adventure Ticket includes crazy golf (ages 3+), disc foot/rugby/golf (ages 3+) and Glen’s Adventure Park (ages 3+).</p><p>Prices start from £15. To book your Activity or Adventure Day Pass, and to explore the wide range of activities on offer at Action Glen, visit: <a href=\"http://www.actionglen.co.uk/tickets\">www.actionglen.co.uk/tickets</a></p><p>Action Glen is located within the grounds of the iconic Crieff Hydro Hotel in Perthshire. To learn more, and to book your stay, visit: <a href=\"http://www.crieffhydro.com\">www.crieffhydro.com</a></p><p><img src=\"https://perthshirechamber.co.uk/site/assets/files/5305/action_glen_has_announced_two_brand-new_day_passes_for_families_and_thrill_seekers_to_enjoy_this_autumn_pic_-_kenny_smith.jpg\" alt=\"\"></p><p>&nbsp;</p>','Andrew H','2023-05-23 13:27:00',62,1,0,'2023-11-13 15:28:19','2023-12-18 07:43:27','-passes-will-unlock-unlimited-access-to-15-thrilling-activities-at-action-glen-throughout-october-',1),(35,'Quis quaerat hic cup','<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></blockquote><p><br>&nbsp;</p>','Blanditiis totam opt','1972-03-24 00:00:00',69,1,0,'2023-12-15 10:04:39','2023-12-18 07:43:27','quas',1);
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_directory`
--

DROP TABLE IF EXISTS `category_directory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category_directory` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `directory_id` bigint DEFAULT '0',
  `category_id` bigint DEFAULT '0',
  `is_active` tinyint DEFAULT '1',
  `is_delete` tinyint DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_directory`
--

LOCK TABLES `category_directory` WRITE;
/*!40000 ALTER TABLE `category_directory` DISABLE KEYS */;
INSERT INTO `category_directory` VALUES (2,25,1,1,0,NULL,NULL),(3,26,1,1,0,NULL,NULL),(5,29,1,1,0,NULL,NULL),(6,30,1,1,0,NULL,NULL),(8,31,1,1,0,NULL,NULL),(9,32,1,1,0,NULL,NULL);
/*!40000 ALTER TABLE `category_directory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directories`
--

DROP TABLE IF EXISTS `directories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `directories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_approved` tinyint DEFAULT '1',
  `user_id` bigint DEFAULT '0',
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `venue_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directories`
--

LOCK TABLES `directories` WRITE;
/*!40000 ALTER TABLE `directories` DISABLE KEYS */;
INSERT INTO `directories` VALUES (10,'abcd','<p>adfjdsal fsdalhf lsdafhl sadfl;asd hflsda flsdah fhsadf hsdlaf hlas dflashd f;lsdahflsdah flsadhl fhsdalf hsdl;ahf;lsdahfldsahfldsahflsdahf;lsdahf;lsedahf</p>',1,0,'2023-10-30 05:43:00','2024-02-13 07:18:16',1,70,'testing78','11111111111','11111111111','R-1976','abcdef@gmail.com','https://www.abcd.com','https://www.abcd.com','https://www.abcd.com','https://www.abcd.com','https://www.abcd.com','https://www.abcd.com',1),(11,'abc','<p>www.abcd.com</p>',1,0,'2023-11-01 21:43:42','2023-11-12 22:25:03',1,62,'testing7','11111111111','11111111111','www.abcd.com','abc@gmail.com','https://www.abcd.com','https://www.abcd.com','https://www.abcd.com','https://www.abcd.com','https://www.abcd.com','https://www.abcd.com',0),(12,'test directory','<p>test</p>',1,0,'2023-11-07 17:34:15','2023-11-24 08:39:22',1,62,'testing','11111111111','12356487965','R-1976','admin12@gmail.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com',1),(13,'testing','<p>testing</p>',1,0,'2023-11-07 17:36:00','2023-11-12 22:24:37',1,66,'testing4','11111111111','12356487965','R-1976','abcd@gmail.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com',0),(14,'Directory Again','<p>testing</p>',1,0,'2023-11-07 17:40:25','2023-11-23 21:23:10',1,66,'testing','11111111111','12356487965','R-1976','admin234@gmail.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com',1),(15,'Test Directory','<p>fghyt</p>',1,0,'2023-11-07 20:02:11','2023-11-12 22:23:28',1,66,'ffff','11111111111','12356487965','R-1976','admin65@gmail.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com',0),(16,'directory','<p>wmfrew</p>',1,0,'2023-11-08 08:57:21','2023-11-12 22:22:57',1,69,'directory','11111111111','12356487965','R-70','admin44@gmail.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com',0),(17,'new directory','<p>sdfgr</p>',1,0,'2023-11-08 09:31:04','2023-11-12 22:33:19',1,69,'new directory','11111111111','11111111111','abc','admin222@gmail.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com',0),(18,'Deserunt ipsam sit a','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',1,0,'2023-11-12 21:23:59','2023-11-12 22:30:34',1,67,'sit-a','+1 (571) 681-6434','+1 (571) 681-6434','Rerum dolor sunt ut','lylizotol@mailinator.com','Voluptatum adipisici','https://pcc.flonix.com/','https://pcc.flonix.com/','https://pcc.flonix.com/','https://pcc.flonix.com/','https://pcc.flonix.com/',0),(19,'test','<p>test</p>',1,0,'2023-11-12 21:39:55','2023-11-12 22:21:51',1,62,'test19','nn','nn','nn','test','nn','nn','nn','nn','nn','nn',0),(20,'Molestiae quas ut sa','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',1,0,'2023-11-12 23:30:51','2023-12-18 08:23:15',1,68,'saepe12','Adipisci rem dolore','+1 (841) 816-6281','+1 (841) 816-6281','fehujoxu@mailinator.com','https://pcc.flonix.com/','https://pcc.flonix.com/','https://pcc.flonix.com/','https://pcc.flonix.com/','https://pcc.flonix.com/','https://pcc.flonix.com/',0),(21,'Asperiores do ea con','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',1,0,'2023-11-13 04:41:02','2023-12-18 08:23:15',1,66,NULL,'Mollitia accusamus e','+1 (307) 178-1278','Dolore aut rerum sun','tarun@mailinator.com','Voluptatem est dict','Commodi accusantium','Dolor commodi offici','Enim et velit hic ve','Nisi ipsum ut lorem','Dicta molestiae et i',0),(22,'Pariatur Expedita p',NULL,1,0,'2023-11-13 04:41:42','2023-12-18 08:23:15',1,66,NULL,'Consectetur volupta','+1 (999) 497-2215','Asperiores nostrum r','dugugavusy@mailinator.com','Qui quisquam amet e','Non incidunt ipsa','Illum irure mollit','Tempore delectus f','Cumque aliqua Volup','Reiciendis reiciendi',0),(23,'Test','<p>afdasfh sdakfh skaldhfdsa fhldsa fldsaflsdalfhsdlafhlsda sdahfsadhfsad</p>',1,0,'2023-11-22 12:30:24','2023-12-18 08:23:15',1,67,'test','1245566888','1245566888','fasfasd fsda fsadf sadfsa','tst@gmc.com','https://pcc.flonix.com/','https://pcc.flonix.com/','https://pcc.flonix.com/','https://pcc.flonix.com/','https://pcc.flonix.com/','https://pcc.flonix.com/',1),(24,'Test Directory','<p>fsdf alfj dsajflasdfh alsdfhldas;hfl asfhldahflhdsalfh ladsfhldashflhadslfhlashfldsahfl</p>',1,0,'2023-11-23 05:30:15','2023-12-18 08:23:15',1,67,'directory-17','1245688885878','254879633333','dsfas fas fsdaf asdfsdaf','testuser.gmcflonix.com','http://gmc.test/','http://gmc.test/','http://gmc.test/','http://gmc.test/','http://gmc.test/','http://gmc.test/',1),(25,'Voluptatum minus rep','<p>lsdhfls ahfdsla hflsdah fldsahf lsdahflsdah flsdahfl dsahfldsahfl asdhfdshflsdhf</p>',1,0,'2023-11-28 05:15:57','2023-12-18 08:23:15',1,66,'istecumquemagnipe','1245698733','1245698733','Ducimus quaerat non','tohututab@mailinator.com','http://gmc.test/','http://gmc.test/','http://gmc.test/','http://gmc.test/','http://gmc.test/','http://gmc.test/',0),(26,'Aut exercitationem d','<p>jv;svjc;zsdj ;\'szjf v\';sdjfs;d\'ajfsad;\'fjds;a\'fjd;s\'afjsd\'a;fjds\';fj;dsafj;sdafj;dsajfasd;\'jfds;\'jfsd;\'ajf\'asd;jf;\'dsafj;\'dsjf</p>',1,0,'2023-11-28 06:10:43','2023-12-18 08:23:15',1,68,'minus-in-ipsum-ipsam','1245786','12457896','Ut ut temporibus nat','kuja@mailinator.com','http://gmc.test/','http://gmc.test/','http://gmc.test/','http://gmc.test/','http://gmc.test/','http://gmc.test/',0),(29,'Eaque autem deleniti','<p>fjldsafhlsd ahflsd ;afhlsd;ahf l;dsahf lsadhfl ahdlfhds lfhdlsa hflsdafh lsdhflsafasdf sdhflsda hflsdh flsdhfl sdafh slad hflsdah flsdhfl sdhflhdsl fhslh lh l h shl fsldfhls dh lsf &nbsp; hlshflhlh &nbsp;hhlshflsfhl</p>',1,0,'2023-11-28 06:18:08','2023-12-18 08:23:15',1,69,'perferendis-quia-sun','45669872222','45669872222','Corrupti cum nemo e','xano@mailinator.com','http://gmc.test/','http://gmc.test/','http://gmc.test/','http://gmc.test/','http://gmc.test/','http://gmc.test/',0),(30,'Aliquam aut dolores','<p>dwsafsadfreae</p>',1,0,'2023-11-28 06:22:04','2023-12-18 08:23:15',1,68,'aute-ipsum-in-aut-id','45789652222','1258555225878','Totam recusandae Co','tumonyry@mailinator.com','http://gmc.test/','http://gmc.test/','http://gmc.test/','http://gmc.test/','http://gmc.test/','http://gmc.test/',0),(31,'Non voluptatem quos','<p>sf,db , d kdsafgkdsafl;sdahf l;sagfh ;lsadf;lsad f;gsad;fgdsa;fgsdag fksag fksagfkdsagfksdgaf k gkfgks adgfkdsgfksgkf</p>',1,0,'2023-12-01 02:39:59','2023-12-24 00:29:20',0,66,'et-duis-aut-lorem-vo','1245698722','12654799222','Consequatur Alias u','cohid@mailinator.com','https://pcc.flonix.com/','https://pcc.flonix.com/','https://pcc.flonix.com/','https://pcc.flonix.com/','https://pcc.flonix.com/','https://pcc.flonix.com/',0),(32,'Directory 3','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',1,0,'2023-12-24 07:00:22','2023-12-24 07:00:22',1,67,'directory4','125485445656','125485445656','sdfsdfsdafsadfsadfsa','directory.gmc@gmail.com','https://staging.perthshirecc.co.uk/','https://staging.perthshirecc.co.uk/','https://staging.perthshirecc.co.uk/','https://staging.perthshirecc.co.uk/','https://staging.perthshirecc.co.uk/','https://staging.perthshirecc.co.uk/',0);
/*!40000 ALTER TABLE `directories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directory_categories`
--

DROP TABLE IF EXISTS `directory_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `directory_categories` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_active` tinyint DEFAULT '1',
  `is_delete` tinyint DEFAULT '0',
  `description` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directory_categories`
--

LOCK TABLES `directory_categories` WRITE;
/*!40000 ALTER TABLE `directory_categories` DISABLE KEYS */;
INSERT INTO `directory_categories` VALUES (1,'Test Category','test-category','2023-11-22 15:24:51','2023-11-22 15:24:51',1,0,NULL);
/*!40000 ALTER TABLE `directory_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_calenders`
--

DROP TABLE IF EXISTS `event_calenders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event_calenders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_approved` tinyint DEFAULT '0',
  `event_date` datetime NOT NULL,
  `venue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `user_id` bigint DEFAULT '0',
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` time DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_calenders`
--

LOCK TABLES `event_calenders` WRITE;
/*!40000 ALTER TABLE `event_calenders` DISABLE KEYS */;
INSERT INTO `event_calenders` VALUES (12,'Thorntons: Immigration | Right to Work: Employer Compliance','<p>The UK Government has announced that the fines for employing illegal workers will increase from <strong>£15,000 to £45,000</strong> per individual found to be working without lawful immigration status.</p>',1,0,'2023-11-13 12:33:40','2023-12-10 01:49:37',1,'2024-02-19 11:32:00','Online',0,62,'-','09:30:00','test','https://comms.thorntons-law.co.uk/32/418/landing-pages/booking-form-(pre-fill)-immigration--right-to-work---employer-compliance.asp'),(13,'Voluptatem et neces','<p>fdsf sdfsd fsd fsdaf sdaf sdaf sd afsd afsd fsd fsda fsd fsd fsd fsdf sdf</p>',1,0,'2023-12-05 22:47:31','2023-12-10 01:52:54',1,'2024-03-19 03:46:00','Excepturi a nobis qu',570,68,'Rerum omnis libero d','10:31:00','test20','http://gmc.test/'),(14,'Nobis culpa nulla e','<p>dsf sdaf sadf sda fsdaf sad fsad fsdaf sdafsdfsdf</p>',1,0,'2023-12-05 22:48:44','2023-12-10 01:48:54',1,'2024-01-19 03:48:00','Rerum ullam at venia',597,68,'Texas','17:10:00','tst22','http://gmc.test/'),(15,'Ullamco est harum ra','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',1,0,'2023-12-10 01:48:05','2023-12-10 01:48:22',1,'2023-12-19 11:46:00','Anim quis occaecat v',671,67,'Aute qui culpa sit','11:46:00','test15','http://gmc.test/'),(16,'Ratione ut ad offici','<p>gjds;fjsad;f jsd;auf sadfh saldfhlsad hflsda hflsa;h f;sa fsdalf hlsadhf ls;adf ds;al fhslad;hflsadf;sdaf s;ldafh&nbsp;</p>',1,0,'2023-12-12 09:59:13','2023-12-12 09:59:13',1,'2024-02-27 19:58:00','Optio sed maiores i',741,67,'Qui incidunt offici','23:55:00','test2','https://pcc.flonix.com/'),(17,'Test Event','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',1,0,'2023-12-15 10:16:59','2023-12-18 08:26:47',1,'2023-12-29 00:00:00','Texas',120,69,'California','15:17:00',NULL,'http://gmc.test/');
/*!40000 ALTER TABLE `event_calenders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `model` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_id` int NOT NULL DEFAULT '0',
  `image_url` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `img_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extension` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=223 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (42,'App\\Models\\Employee',0,'http://gmc.test/media/about-4.jpg',0,'main','2023-10-22 12:39:55','2023-10-22 12:39:55','about-4.jpg','jpg',1),(43,'App\\Models\\User',0,'http://gmc.test/media/about-4.jpg',0,'main','2023-10-22 13:25:36','2023-10-22 13:25:36','about-4.jpg','jpg',1),(44,'App\\Models\\User',66,'http://gmc.test/media/b2.png',0,'main','2023-10-22 14:21:11','2024-02-13 07:10:33','b2.png','png',1),(47,'App\\Models\\User',0,'http://gmc.test/media/1.jpg',0,'main','2023-10-22 18:11:30','2023-10-22 18:11:30','1.jpg','jpg',1),(48,'App\\Models\\User',68,'http://gmc.test/media/app_bg.jpg',0,'main','2023-10-22 18:19:59','2023-10-22 18:20:02','app_bg.jpg','jpg',1),(49,'App\\Models\\User',69,'http://gmc.test/media/404.png',0,'main','2023-10-28 17:52:25','2023-10-28 17:52:43','404.png','png',1),(59,'App\\Models\\PlatinumPartner',2,'http://gmc.test/media/download.jpg',0,'main','2023-11-10 21:34:14','2023-11-12 22:19:05','download.jpg','jpg',1),(76,'App\\Models\\PlatinumPartner',2,'http://gmc.test/media/368_download.jpg',0,'main','2023-11-11 20:58:37','2023-11-12 22:19:05','368_download.jpg','jpg',1),(77,'App\\Models\\PlatinumPartner',1,'http://gmc.test/media/678_download.jpg',0,'main','2023-11-11 20:58:56','2023-11-11 20:59:26','678_download.jpg','jpg',1),(78,'App\\Models\\PlatinumPartner',2,'http://gmc.test/media/940_368_download.jpg',0,'main','2023-11-11 20:59:09','2023-11-12 22:19:05','940_368_download.jpg','jpg',1),(79,'App\\Models\\PlatinumPartner',1,'http://gmc.test/media/160_678_download.jpg',0,'main','2023-11-11 20:59:24','2023-11-11 20:59:26','160_678_download.jpg','jpg',1),(85,'App\\Models\\Directory',0,'https://pcc.flonix.com/media/657_1.jpg',0,'main','2023-11-12 21:21:14','2023-11-12 21:21:14','657_1.jpg','jpg',1),(92,'App\\Models\\Directory',19,'https://pcc.flonix.com/media/209_3.jpg',0,'main','2023-11-12 21:39:54','2023-11-12 22:21:51','209_3.jpg','jpg',1),(94,'App\\Models\\Directory',0,'https://pcc.flonix.com/media/275_706_2.jpg',0,'main','2023-11-12 21:40:47','2023-11-12 21:40:47','275_706_2.jpg','jpg',1),(97,'App\\Models\\SpaceFinder',13,'https://pcc.flonix.com/media/437_8.jpg',0,'main','2023-11-12 21:42:52','2023-11-12 21:42:58','437_8.jpg','jpg',1),(98,'App\\Models\\SpaceFinder',14,'https://pcc.flonix.com/media/792_5.jpg',0,'main','2023-11-12 21:47:40','2023-11-12 21:58:12','792_5.jpg','jpg',1),(99,'App\\Models\\SpaceFinder',14,'https://pcc.flonix.com/media/884_792_5.jpg',0,'main','2023-11-12 21:57:54','2023-11-12 21:58:12','884_792_5.jpg','jpg',1),(100,'App\\Models\\Space Finder',0,'https://pcc.flonix.com/media/903_884_792_5.jpg',0,'main','2023-11-12 21:58:31','2023-11-12 21:58:31','903_884_792_5.jpg','jpg',1),(104,'App\\Models\\Space Finder',0,'https://pcc.flonix.com/media/537_884_792_5.jpg',0,'main','2023-11-12 22:17:56','2023-11-12 22:17:56','537_884_792_5.jpg','jpg',1),(105,'App\\Models\\Space Finder',0,'https://pcc.flonix.com/media/996_437_8.jpg',0,'main','2023-11-12 22:18:16','2023-11-12 22:18:16','996_437_8.jpg','jpg',1),(106,'App\\Models\\SpaceFinder',12,'https://pcc.flonix.com/media/196_6.jpg',0,'main','2023-11-12 22:18:47','2023-11-12 22:18:48','196_6.jpg','jpg',1),(107,'App\\Models\\PlatinumPartner',2,'https://pcc.flonix.com/media/737_download.jpg',0,'main','2023-11-12 22:19:01','2023-11-12 22:19:05','737_download.jpg','jpg',1),(109,'App\\Models\\SpaceFinder',9,'https://pcc.flonix.com/media/884_4.jpg',0,'main','2023-11-12 22:19:35','2023-11-12 23:29:06','884_4.jpg','jpg',1),(110,'App\\Models\\Directory',0,'https://pcc.flonix.com/media/851_706_2.jpg',0,'main','2023-11-12 22:20:06','2023-11-12 22:20:06','851_706_2.jpg','jpg',1),(111,'App\\Models\\Directory',0,'https://pcc.flonix.com/media/950_209_3.jpg',0,'main','2023-11-12 22:20:38','2023-11-12 22:20:38','950_209_3.jpg','jpg',1),(112,'App\\Models\\PlatinumPartner',3,'https://pcc.flonix.com/media/923_download1.jpg',0,'main','2023-11-12 22:20:58','2023-11-12 22:21:00','923_download1.jpg','jpg',1),(114,'App\\Models\\Directory',19,'https://pcc.flonix.com/media/915_ab1-img.png',0,'main','2023-11-12 22:21:49','2023-11-12 22:21:51','915_ab1-img.png','png',1),(116,'App\\Models\\Directory',16,'https://pcc.flonix.com/media/957_7.jpg',0,'main','2023-11-12 22:22:55','2023-11-12 22:22:57','957_7.jpg','jpg',1),(117,'App\\Models\\Directory',15,'https://pcc.flonix.com/media/264_5.jpg',0,'main','2023-11-12 22:23:26','2023-11-12 22:23:28','264_5.jpg','jpg',1),(118,'App\\Models\\Directory',14,'https://pcc.flonix.com/media/926_8.jpg',0,'main','2023-11-12 22:23:57','2023-11-23 21:23:10','926_8.jpg','jpg',1),(119,'App\\Models\\Directory',13,'https://pcc.flonix.com/media/999_1.jpg',0,'main','2023-11-12 22:24:36','2023-11-12 22:24:37','999_1.jpg','jpg',1),(120,'App\\Models\\Directory',11,'https://pcc.flonix.com/media/357_5.jpg',0,'main','2023-11-12 22:25:01','2023-11-12 22:25:03','357_5.jpg','jpg',1),(129,'App\\Models\\Directory',18,'https://pcc.flonix.com/media/956_ab-img.png',0,'main','2023-11-12 22:30:32','2023-11-12 22:30:34','956_ab-img.png','png',1),(131,'App\\Models\\Directory',17,'https://pcc.flonix.com/media/713_int-img.jpg',0,'main','2023-11-12 22:33:05','2023-11-12 22:33:19','713_int-img.jpg','jpg',1),(133,'App\\Models\\Directory',0,'https://pcc.flonix.com/media/856_357_5.jpg',0,'main','2023-11-12 22:39:58','2023-11-12 22:39:58','856_357_5.jpg','jpg',1),(135,'App\\Models\\Directory',10,'https://pcc.flonix.com/media/516_404.png',0,'main','2023-11-12 22:42:29','2024-02-13 07:18:16','516_404.png','png',1),(137,'App\\Models\\EventCalender',10,'https://pcc.flonix.com/media/784_1.jpg',0,'main','2023-11-12 22:45:51','2023-11-12 22:45:54','784_1.jpg','jpg',1),(138,'App\\Models\\EventCalender',9,'https://pcc.flonix.com/media/683_4.jpg',0,'main','2023-11-12 22:48:06','2023-11-12 22:48:08','683_4.jpg','jpg',1),(139,'App\\Models\\EventCalender',8,'https://pcc.flonix.com/media/609_8.jpg',0,'main','2023-11-12 22:48:48','2023-11-12 22:48:50','609_8.jpg','jpg',1),(140,'App\\Models\\Blog',8,'https://pcc.flonix.com/media/262_1.jpg',0,'main','2023-11-12 23:03:35','2023-11-13 00:08:17','262_1.jpg','jpg',1),(141,'App\\Models\\Blog',8,'https://pcc.flonix.com/media/622_262_1.jpg',0,'main','2023-11-12 23:12:37','2023-11-13 00:08:17','622_262_1.jpg','jpg',1),(142,'App\\Models\\Blog',7,'https://pcc.flonix.com/media/130_2.jpg',0,'main','2023-11-12 23:13:43','2023-11-12 23:13:46','130_2.jpg','jpg',1),(143,'App\\Models\\Blog',6,'https://pcc.flonix.com/media/119_3.jpg',0,'main','2023-11-12 23:14:09','2023-11-12 23:14:11','119_3.jpg','jpg',1),(144,'App\\Models\\Blog',5,'https://pcc.flonix.com/media/562_4.jpg',0,'main','2023-11-12 23:14:27','2023-11-12 23:14:30','562_4.jpg','jpg',1),(145,'App\\Models\\Blog',4,'https://pcc.flonix.com/media/813_5.jpg',0,'main','2023-11-12 23:14:54','2023-11-12 23:14:56','813_5.jpg','jpg',1),(146,'App\\Models\\Blog',3,'https://pcc.flonix.com/media/510_6.jpg',0,'main','2023-11-12 23:15:27','2023-11-12 23:15:34','510_6.jpg','jpg',1),(147,'App\\Models\\Blog',3,'https://pcc.flonix.com/media/281_6.jpg',0,'main','2023-11-12 23:15:31','2023-11-12 23:15:34','281_6.jpg','jpg',1),(148,'App\\Models\\Blog',2,'https://pcc.flonix.com/media/359_8.jpg',0,'main','2023-11-12 23:16:01','2023-11-12 23:16:04','359_8.jpg','jpg',1),(149,'App\\Models\\Directory',0,'https://pcc.flonix.com/media/404_5.jpg',0,'main','2023-11-12 23:18:44','2023-11-12 23:18:44','404_5.jpg','jpg',1),(150,'App\\Models\\SpaceFinder',10,'https://pcc.flonix.com/media/277_846_3.jpg',0,'main','2023-11-12 23:28:08','2023-11-12 23:28:11','277_846_3.jpg','jpg',1),(152,'App\\Models\\SpaceFinder',9,'https://pcc.flonix.com/media/860_scc-annual-dinner-2021.jpg',0,'main','2023-11-12 23:28:59','2023-11-12 23:29:06','860_scc-annual-dinner-2021.jpg','jpg',1),(153,'App\\Models\\Directory',20,'https://pcc.flonix.com/media/310_3.jpg',0,'main','2023-11-12 23:29:50','2023-11-12 23:30:51','310_3.jpg','jpg',1),(155,'App\\Models\\Blog',8,'https://pcc.flonix.com/media/298_scc-annual-dinner-2021.jpg',0,'main','2023-11-13 00:06:38','2023-11-13 00:08:17','298_scc-annual-dinner-2021.jpg','jpg',1),(157,'App\\Models\\Blog',9,'https://pcc.flonix.com/media/527_scc-annual-dinner-2021.jpg',0,'main','2023-11-13 00:09:37','2023-11-13 00:09:39','527_scc-annual-dinner-2021.jpg','jpg',1),(158,'App\\Models\\Space Finder',0,'https://pcc.flonix.com/media/927_884_792_5.jpg',0,'main','2023-11-13 09:11:54','2023-11-13 09:11:54','927_884_792_5.jpg','jpg',1),(159,'App\\Models\\Blog',0,'https://pcc.flonix.com/media/451_527_scc-annual-dinner-2021.jpg',0,'main','2023-11-13 10:46:04','2023-11-13 10:46:04','451_527_scc-annual-dinner-2021.jpg','jpg',1),(160,'App\\Models\\EventCalender',0,'https://pcc.flonix.com/media/812_thorntons.png',0,'main','2023-11-13 13:42:00','2023-11-13 13:42:00','812_thorntons.png','png',1),(161,'App\\Models\\EventCalender',0,'https://pcc.flonix.com/media/103_thorntons.png',0,'main','2023-11-13 13:44:02','2023-11-13 13:44:02','103_thorntons.png','png',1),(162,'App\\Models\\Blog',10,'https://pcc.flonix.com/media/937_msp_committee_visit_50.635x0-is.jpg',0,'main','2023-11-13 13:47:05','2023-11-13 13:47:13','937_msp_committee_visit_50.635x0-is.jpg','jpg',1),(163,'App\\Models\\Blog',0,'https://pcc.flonix.com/media/835_937_msp_committee_visit_50.635x0-is.jpg',0,'main','2023-11-13 13:53:18','2023-11-13 13:53:18','835_937_msp_committee_visit_50.635x0-is.jpg','jpg',1),(164,'App\\Models\\Blog',11,'https://pcc.flonix.com/media/650_azets_strip_2.jpg',0,'main','2023-11-13 14:07:40','2023-11-13 14:07:43','650_azets_strip_2.jpg','jpg',1),(165,'App\\Models\\Blog',0,'https://pcc.flonix.com/media/365_l-r_-_robert_graham-campbell_michael_shaw_-_gillespie_macandrew_50pc.jpg',0,'main','2023-11-13 14:09:42','2023-11-13 14:09:42','365_l-r_-_robert_graham-campbell_michael_shaw_-_gillespie_macandrew_50pc.jpg','jpg',1),(166,'App\\Models\\Blog',13,'https://pcc.flonix.com/media/465_perth_sportswomans_dinner.jpg',0,'main','2023-11-13 14:11:09','2023-11-13 14:11:10','465_perth_sportswomans_dinner.jpg','jpg',1),(167,'App\\Models\\Blog',12,'https://pcc.flonix.com/media/389_l-r_-_robert_graham-campbell_michael_shaw_-_gillespie_macandrew_50pc.jpg',0,'main','2023-11-13 14:11:47','2023-11-13 14:11:48','389_l-r_-_robert_graham-campbell_michael_shaw_-_gillespie_macandrew_50pc.jpg','jpg',1),(168,'App\\Models\\Blog',14,'https://pcc.flonix.com/media/561_fashionshownew_600x.png',0,'main','2023-11-13 14:29:51','2023-11-13 14:29:53','561_fashionshownew_600x.png','png',1),(169,'App\\Models\\Blog',15,'https://pcc.flonix.com/media/886_insulation-august-2023.png',0,'main','2023-11-13 14:31:26','2023-11-13 14:31:52','886_insulation-august-2023.png','png',1),(170,'App\\Models\\Blog',16,'https://pcc.flonix.com/media/153_2021_09_pcc_star_logo_final.png',0,'main','2023-11-13 14:36:39','2023-11-13 14:37:09','153_2021_09_pcc_star_logo_final.png','png',1),(171,'App\\Models\\Blog',0,'https://pcc.flonix.com/media/923_qei_-_manufacturing.png',0,'main','2023-11-13 14:39:57','2023-11-13 14:39:57','923_qei_-_manufacturing.png','png',1),(172,'App\\Models\\Blog',18,'https://pcc.flonix.com/media/238_income-tax-calculator-accounting-4097292.jpg',0,'main','2023-11-13 14:41:10','2023-11-13 14:41:13','238_income-tax-calculator-accounting-4097292.jpg','jpg',1),(173,'App\\Models\\Blog',19,'https://pcc.flonix.com/media/510_bank_of_england_3.jpg',0,'main','2023-11-13 14:48:34','2023-11-13 14:48:41','510_bank_of_england_3.jpg','jpg',1),(174,'App\\Models\\Blog',20,'https://pcc.flonix.com/media/103_strip_3.png',0,'main','2023-11-13 14:49:54','2023-11-13 14:50:27','103_strip_3.png','png',1),(175,'App\\Models\\Blog',21,'https://pcc.flonix.com/media/459_23_09_asw_award_50pc.jpg',0,'main','2023-11-13 14:52:53','2023-11-13 14:52:54','459_23_09_asw_award_50pc.jpg','jpg',1),(176,'App\\Models\\Blog',22,'https://pcc.flonix.com/media/778_criaghead_wind_farm-logo.png',0,'main','2023-11-13 14:54:58','2023-11-13 14:55:48','778_criaghead_wind_farm-logo.png','png',1),(177,'App\\Models\\Blog',0,'https://pcc.flonix.com/media/377_davidsons_chemists.jpg',0,'main','2023-11-13 14:56:57','2023-11-13 14:56:57','377_davidsons_chemists.jpg','jpg',1),(178,'App\\Models\\Blog',23,'https://pcc.flonix.com/media/445_davidsons_chemists.jpg',0,'main','2023-11-13 15:04:32','2023-11-13 15:04:33','445_davidsons_chemists.jpg','jpg',1),(179,'App\\Models\\Blog',24,'https://pcc.flonix.com/media/966_sponsored_by_1.png',0,'main','2023-11-13 15:06:07','2023-11-13 15:06:13','966_sponsored_by_1.png','png',1),(180,'App\\Models\\Blog',0,'https://pcc.flonix.com/media/698_pa_page.jpg',0,'main','2023-11-13 15:09:21','2023-11-13 15:09:21','698_pa_page.jpg','jpg',1),(181,'App\\Models\\Blog',25,'https://pcc.flonix.com/media/722_pa_page.jpg',0,'main','2023-11-13 15:10:06','2023-11-13 15:10:35','722_pa_page.jpg','jpg',1),(182,'App\\Models\\Blog',26,'https://pcc.flonix.com/media/736_team_winners_-_scottish_woodland_50pc.jpg',0,'main','2023-11-13 15:11:47','2023-11-13 15:13:05','736_team_winners_-_scottish_woodland_50pc.jpg','jpg',1),(183,'App\\Models\\Blog',27,'https://pcc.flonix.com/media/551_tgo_creative_studio_moved.jpg',0,'main','2023-11-13 15:14:39','2023-11-13 15:14:51','551_tgo_creative_studio_moved.jpg','jpg',1),(184,'App\\Models\\Blog',28,'https://pcc.flonix.com/media/504_perth_kinross_council_negative.png',0,'main','2023-11-13 15:19:13','2023-11-13 15:19:18','504_perth_kinross_council_negative.png','png',1),(185,'App\\Models\\Blog',29,'https://pcc.flonix.com/media/242_winter-warmer-sessions-logo-for-web.png',0,'main','2023-11-13 15:20:50','2023-11-13 15:20:51','242_winter-warmer-sessions-logo-for-web.png','png',1),(186,'App\\Models\\Blog',30,'https://pcc.flonix.com/media/410_tabla_indian_takeaway_2023.jpg',0,'main','2023-11-13 15:21:47','2023-11-13 15:21:56','410_tabla_indian_takeaway_2023.jpg','jpg',1),(187,'App\\Models\\Blog',31,'https://pcc.flonix.com/media/634_scc_network_logo.jpg',0,'main','2023-11-13 15:23:08','2023-11-13 15:23:11','634_scc_network_logo.jpg','jpg',1),(188,'App\\Models\\Blog',32,'https://pcc.flonix.com/media/695_syff_festival_2023_poster_x2000.png',0,'main','2023-11-13 15:25:06','2023-11-13 15:25:07','695_syff_festival_2023_poster_x2000.png','png',1),(189,'App\\Models\\Blog',33,'https://pcc.flonix.com/media/761_freepic_stjohnskirk-1.jpeg',0,'main','2023-11-13 15:26:47','2023-11-13 15:26:51','761_freepic_stjohnskirk-1.jpeg','jpeg',1),(190,'App\\Models\\Blog',34,'https://pcc.flonix.com/media/373_action_glen_has_announced_two_brand-new_day_passes_for_families_and_thrill_seekers_to_enjoy_this_autumn_pic_-_kenny_smith-1.jpg',0,'main','2023-11-13 15:28:11','2023-11-13 15:28:19','373_action_glen_has_announced_two_brand-new_day_passes_for_families_and_thrill_seekers_to_enjoy_this','jpg',1),(191,'App\\Models\\Category',1,'http://gmc.test/media/206_6.jpg',0,'main','2023-11-22 10:24:48','2023-11-22 10:24:52','206_6.jpg','jpg',1),(192,'App\\Models\\Category',0,'http://gmc.test/media/206_6.jpg',0,'main','2023-11-22 10:29:33','2023-11-22 10:29:33','206_6.jpg','jpg',1),(193,'App\\Models\\Directory',23,'http://gmc.test/media/206_6.jpg',0,'main','2023-11-22 12:29:30','2023-11-22 12:30:24','206_6.jpg','jpg',1),(194,'App\\Models\\Directory',24,'http://gmc.test/media/311_ab-img.png',0,'main','2023-11-23 05:30:07','2023-11-23 05:30:15','311_ab-img.png','png',1),(195,'App\\Models\\Directory',12,'http://gmc.test/media/226_1.jpg',0,'main','2023-11-24 08:39:14','2023-11-24 08:39:22','226_1.jpg','jpg',1),(196,'App\\Models\\Directory',25,'http://gmc.test/media/5.jpg',0,'main','2023-11-28 05:12:55','2023-11-28 06:03:25','5.jpg','jpg',1),(197,'App\\Models\\Directory',25,'http://gmc.test/media/1.jpg',0,'main','2023-11-28 06:03:18','2023-11-28 06:03:25','1.jpg','jpg',1),(198,'App\\Models\\Directory',26,'http://gmc.test/media/7.jpg',0,'main','2023-11-28 06:08:30','2023-11-28 06:10:44','7.jpg','jpg',1),(199,'App\\Models\\Directory',29,'http://gmc.test/media/8.jpg',0,'main','2023-11-28 06:17:16','2023-11-28 06:21:14','8.jpg','jpg',1),(200,'App\\Models\\Directory',29,'http://gmc.test/media/1.jpg',0,'main','2023-11-28 06:21:12','2023-11-28 06:21:14','1.jpg','jpg',1),(201,'App\\Models\\Directory',30,'http://gmc.test/media/8.jpg',0,'main','2023-11-28 06:22:01','2023-11-28 06:22:04','8.jpg','jpg',1),(202,'App\\Models\\Directory',0,'http://gmc.test/media/206_6.jpg',0,'main','2023-12-01 02:21:36','2023-12-01 02:21:36','206_6.jpg','jpg',1),(203,'App\\Models\\Directory',0,'http://gmc.test/media/210_ab-img.png',0,'main','2023-12-01 02:28:13','2023-12-01 02:28:13','210_ab-img.png','png',1),(204,'App\\Models\\Directory',31,'http://gmc.test/media/404.png',0,'main','2023-12-01 02:39:52','2023-12-01 02:57:56','404.png','png',1),(205,'App\\Models\\Directory',31,'http://gmc.test/media/210_ab-img.png',0,'main','2023-12-01 02:51:46','2023-12-01 02:57:56','210_ab-img.png','png',1),(206,'App\\Models\\EventCalender',13,'http://gmc.test/media/206_6.jpg',0,'main','2023-12-05 22:47:25','2023-12-10 01:52:54','206_6.jpg','jpg',1),(207,'App\\Models\\EventCalender',14,'http://gmc.test/media/1.jpg',0,'main','2023-12-05 22:48:39','2023-12-10 01:48:54','1.jpg','jpg',1),(208,'App\\Models\\EventCalender',15,'http://gmc.test/media/0x0.png',0,'main','2023-12-10 01:47:56','2023-12-10 01:48:22','0x0.png','png',1),(209,'App\\Models\\EventCalender',12,'http://gmc.test/media/6.jpg',0,'main','2023-12-10 01:49:35','2023-12-10 01:49:37','6.jpg','jpg',1),(210,'App\\Models\\M2MOffer',0,'http://gmc.test/media/4.jpg',0,'main','2023-12-10 04:44:48','2023-12-10 04:47:36','4.jpg','jpg',1),(211,'App\\Models\\M2MOffer',1,'http://gmc.test/media/6.jpg',0,'main','2023-12-10 04:53:51','2023-12-10 04:53:55','6.jpg','jpg',1),(212,'App\\Models\\EventCalender',16,'http://gmc.test/media/4.jpg',0,'main','2023-12-12 09:59:04','2023-12-12 09:59:13','4.jpg','jpg',1),(213,'App\\Models\\Blog',35,'http://gmc.test/media/6.jpg',0,'main','2023-12-15 10:04:39','2023-12-15 10:04:39','6.jpg','jpg',1),(214,'App\\Models\\EventCalender',17,'http://gmc.test/media/6.jpg',0,'main','2023-12-15 10:16:59','2023-12-15 10:16:59','6.jpg','jpg',1),(215,'App\\Models\\SpaceFinder',15,'http://gmc.test/media/6.jpg',0,'main','2023-12-15 10:40:48','2023-12-15 10:40:48','6.jpg','jpg',1),(216,'App\\Models\\PlatinumPartner',4,'http://gmc.test/media/2.jpg',0,'main','2023-12-24 06:53:32','2023-12-24 06:53:49','2.jpg','jpg',1),(217,'App\\Models\\PlatinumPartner',5,'http://gmc.test/media/8.jpg',0,'main','2023-12-24 06:56:03','2023-12-24 06:56:11','8.jpg','jpg',1),(218,'App\\Models\\Directory',32,'http://gmc.test/media/3.jpg',0,'main','2023-12-24 07:00:16','2023-12-24 07:00:22','3.jpg','jpg',1),(219,'App\\Models\\PlatinumPartner',6,'http://gmc.test/media/2.jpg',0,'main','2024-01-03 09:35:29','2024-01-03 09:35:32','2.jpg','jpg',1),(220,'App\\Models\\M2MOffer',0,'http://gmc.test/media/6.jpg',0,'main','2024-01-07 03:30:26','2024-01-07 03:30:26','6.jpg','jpg',1),(221,'App\\Models\\M2MOffer',0,'http://gmc.test/media/3.jpg',0,'main','2024-01-07 03:31:32','2024-01-07 03:31:32','3.jpg','jpg',1),(222,'App\\Models\\User',70,'http://gmc.test/media/banner.png',0,'main','2024-02-13 07:15:55','2024-02-13 07:16:01','banner.png','png',1);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m2m_offers`
--

DROP TABLE IF EXISTS `m2m_offers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `m2m_offers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_details` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `is_delete` tinyint(1) DEFAULT '0',
  `user_id` int DEFAULT NULL,
  `is_approved` int DEFAULT '0',
  `slug` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m2m_offers`
--

LOCK TABLES `m2m_offers` WRITE;
/*!40000 ALTER TABLE `m2m_offers` DISABLE KEYS */;
INSERT INTO `m2m_offers` VALUES (1,'Wilcox and Odonnell Traders','Charde','Wright','255782222','ripu@mailinator.com','http://gmc.test/','<p>sadfsdafn sb,dasf ,adsf, adsf,dashfsdahfl sadhlf hsdalf hsldafh lsadhfldsahf lsad fhlsdahf lsdafhlsdahflsda hf</p>','2023-12-10 04:47:36','2024-01-07 02:53:42',1,0,67,1,'wilcox-and-odonnell-traders');
/*!40000 ALTER TABLE `m2m_offers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messages` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `sender_id` bigint DEFAULT '0',
  `reciever_id` bigint DEFAULT '0',
  `message` longtext,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_delete` tinyint DEFAULT '0',
  `is_active` tinyint DEFAULT '1',
  `is_read` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (2,69,68,'Hello','2024-02-03 04:28:27','2024-02-05 07:14:29',0,1,1),(3,69,68,'hey','2024-02-03 06:35:16','2024-02-05 07:14:29',0,1,1),(4,69,68,'are you in','2024-02-03 06:38:05','2024-02-05 07:14:29',0,1,1),(5,69,68,'hey','2024-02-03 06:41:08','2024-02-05 07:14:29',0,1,1),(6,69,68,'nic','2024-02-03 06:42:16','2024-02-05 07:14:29',0,1,1),(7,68,69,'hi','2024-02-03 07:12:38','2024-02-03 07:12:38',0,1,1),(8,69,68,'hello','2024-02-03 07:13:59','2024-02-05 07:14:29',0,1,1),(9,68,69,'how are yo;u??','2024-02-03 07:15:05','2024-02-03 07:15:05',0,1,1),(10,69,68,'i am good what about you','2024-02-03 07:16:23','2024-02-05 07:14:29',0,1,1),(11,69,68,'i am pretty fine','2024-02-05 03:13:00','2024-02-05 07:14:29',0,1,1),(12,69,68,'hi','2024-02-05 03:13:50','2024-02-05 07:14:29',0,1,1),(13,68,69,'very well','2024-02-05 03:15:05','2024-02-05 03:15:05',0,1,1),(14,68,69,'are you in with me on this project','2024-02-05 03:32:33','2024-02-05 03:32:33',0,1,1),(15,68,69,'are you in with me on this project','2024-02-05 03:32:34','2024-02-05 03:32:34',0,1,1),(16,68,69,'please reply','2024-02-05 03:34:26','2024-02-05 03:34:26',0,1,1),(17,69,68,'yes','2024-02-05 03:40:47','2024-02-05 07:14:29',0,1,1),(18,68,69,'hey??','2024-02-05 04:02:51','2024-02-05 04:02:51',0,1,1),(19,69,68,'are you available>>>','2024-02-05 04:05:55','2024-02-05 07:14:29',0,1,1),(20,68,69,'hey','2024-02-05 05:24:28','2024-02-05 07:14:29',0,1,1),(21,68,69,'are you availabl right now??','2024-02-05 05:32:11','2024-02-05 07:14:29',0,1,1),(22,69,68,'no i cant able to join','2024-02-05 05:37:05','2024-02-05 07:14:29',0,1,1),(23,69,68,'let do now','2024-02-05 05:38:06','2024-02-05 07:14:29',0,1,1),(24,69,68,'hey ??','2024-02-05 05:38:31','2024-02-05 07:14:29',0,1,1),(25,69,70,'hi?','2024-02-13 07:19:22','2024-02-13 07:19:22',0,1,1),(26,70,69,'hello','2024-02-13 07:20:35','2024-02-13 07:20:35',0,1,1),(27,69,70,'are you available right now ??','2024-02-13 07:53:34','2024-02-13 07:53:34',0,1,0),(28,70,69,'yes','2024-02-13 07:53:57','2024-02-18 07:04:17',0,1,1),(29,69,70,'Ok','2024-02-13 08:19:56','2024-02-13 08:19:56',0,1,0);
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2019_05_03_000001_create_customer_columns',1),(2,'2019_05_03_000002_create_subscriptions_table',1),(3,'2019_05_03_000003_create_subscription_items_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_10_14_120142_create_blogs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `model_id` bigint unsigned NOT NULL,
  `permission_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `model_type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (5,'App\\Models\\User',60),(6,'App\\Models\\User',66),(6,'App\\Models\\User',67),(6,'App\\Models\\User',68),(6,'App\\Models\\User',69),(6,'App\\Models\\User',70);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layout` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `has_custom_view` tinyint(1) NOT NULL DEFAULT '1',
  `display_to_menu` tinyint(1) NOT NULL DEFAULT '0',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `is_home_page` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Home','home','indexv1','layoutv2',NULL,1,1,1,0,1,NULL,NULL);
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (5,'create',NULL,NULL),(6,'edit',NULL,NULL),(7,'delete',NULL,NULL),(8,'update',NULL,NULL);
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
INSERT INTO `personal_access_tokens` VALUES (86,'App\\Models\\User',68,'API Token','e3fd664df8dbde328a4411d04a10b5031f833486a6af4a0a1ffe98bc1d47130e','[\"*\"]',NULL,'2024-01-14 10:19:07','2024-01-14 10:19:07'),(89,'App\\Models\\User',69,'API Token','b332160379c46c8e5a3e3206263aa67c83cca50522cc5cd87005dee5f8b2e22b','[\"*\"]',NULL,'2024-01-18 06:52:02','2024-01-18 06:52:02'),(90,'App\\Models\\User',69,'API Token','312e1b35f3896f4aa5f77fdaa1ed86330b71734dbe0870e94105550eeda28eed','[\"*\"]',NULL,'2024-01-18 21:26:45','2024-01-18 21:26:45'),(91,'App\\Models\\User',69,'API Token','f66eaf139554d8d1599a8f1433e81c6488248d250cf88e75c48003a912a1ebf1','[\"*\"]',NULL,'2024-01-18 23:26:44','2024-01-18 23:26:44'),(93,'App\\Models\\User',69,'API Token','ea877cc6afea29509bd48730b8a02d644b51c1e0cbdf30a9ca11b967639bb29e','[\"*\"]',NULL,'2024-01-20 01:20:26','2024-01-20 01:20:26'),(94,'App\\Models\\User',69,'API Token','f45ede660f89935510db1ccd9396df4a36116b2d0f9dd160b39afa48e01a8eaa','[\"*\"]',NULL,'2024-01-20 01:24:52','2024-01-20 01:24:52'),(95,'App\\Models\\User',69,'API Token','5b45d4fe53211ea88bfd915c7aa5d0dd9c0fcc9b6f0fe4a6e0c20b4284e252d4','[\"*\"]',NULL,'2024-01-20 06:22:03','2024-01-20 06:22:03'),(96,'App\\Models\\User',69,'API Token','ff1c552148f6daafbd6f509e994e22aa73c1a6dfdb0d122c6e2f3dda1262d93f','[\"*\"]',NULL,'2024-01-20 22:55:19','2024-01-20 22:55:19'),(97,'App\\Models\\User',69,'API Token','811a779a3c9761fb2aa029a1372bbe9ff1b64e852d395e4e375934300476a326','[\"*\"]',NULL,'2024-01-21 05:42:55','2024-01-21 05:42:55'),(99,'App\\Models\\User',69,'API Token','d21d1c44de98bc0796164a8649dcc435dc9b73a151d6e023429fbcc808a32277','[\"*\"]',NULL,'2024-02-03 02:16:36','2024-02-03 02:16:36'),(103,'App\\Models\\User',68,'API Token','450269a550c222aafd357c074c251b3ca157beca89040e3737ad0a71d7c78056','[\"*\"]',NULL,'2024-02-03 03:55:48','2024-02-03 03:55:48'),(105,'App\\Models\\User',68,'API Token','ebe3a10b140708292f8104b264ff2bbfe6f77607a120acdcae7602d1d13d2de7','[\"*\"]',NULL,'2024-02-03 06:24:27','2024-02-03 06:24:27'),(106,'App\\Models\\User',69,'API Token','d3c5ef56c5220904be79e0517e8e05297fa662cf42cb4ee58ba7bf33e4e20e75','[\"*\"]',NULL,'2024-02-04 22:29:38','2024-02-04 22:29:38'),(108,'App\\Models\\User',68,'API Token','9cab19b8860aa546c58fc814319ff2ad578951312fa564511e00c3a41145309e','[\"*\"]',NULL,'2024-02-04 22:34:30','2024-02-04 22:34:30'),(109,'App\\Models\\User',69,'API Token','a53c586d1ada6a4424db0b6e9f1e3684e502b9d776a7bf8e17e2d91e2731c5e9','[\"*\"]',NULL,'2024-02-13 06:15:25','2024-02-13 06:15:25'),(116,'App\\Models\\User',70,'API Token','df11caafa1d763dbfb4e9417ef894bdfb018298b6e4c62ec5c31a0e92a708793','[\"*\"]',NULL,'2024-02-13 07:18:47','2024-02-13 07:18:47'),(117,'App\\Models\\User',69,'API Token','c188d649da5de4af4dceae01c751ce72f84892a48822ed028edb296038abadbd','[\"*\"]',NULL,'2024-02-17 22:51:10','2024-02-17 22:51:10'),(118,'App\\Models\\User',69,'API Token','ae086f6b799c1c7a39b33122dad8280e44b8d4837eee907eaab994bc11de310b','[\"*\"]',NULL,'2024-02-18 03:38:12','2024-02-18 03:38:12'),(119,'App\\Models\\User',69,'API Token','8b6991baf3c5058ea437dbfcc6de6209f21efd05738efc81b3e6e71a76720bab','[\"*\"]',NULL,'2024-02-19 09:28:52','2024-02-19 09:28:52');
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `platinum_partners`
--

DROP TABLE IF EXISTS `platinum_partners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `platinum_partners` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `is_delete` tinyint(1) DEFAULT '0',
  `is_approved` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web_url` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `platinum_partners`
--

LOCK TABLES `platinum_partners` WRITE;
/*!40000 ALTER TABLE `platinum_partners` DISABLE KEYS */;
INSERT INTO `platinum_partners` VALUES (1,'test','<p>test</p>',1,0,1,'2023-11-10 21:40:47','2023-11-11 20:59:26','test',NULL),(2,'test2','<p>test2</p>',0,0,0,'2023-11-10 22:03:40','2023-11-12 22:19:05','test2',NULL),(3,'testing','<p>testing for platinum partners</p>',1,0,1,'2023-11-12 22:21:00','2023-11-12 22:21:00','testing',NULL),(4,NULL,'<p>sdf sadlfjslda fhsladhf sadhfsdalfhsdal lsadflsdahf lsadhfsldahflsadhf lsadfhsdlahflsadhf</p>',1,0,1,'2023-12-24 06:53:49','2023-12-24 06:53:49','test-partner','https://staging.perthshirecc.co.uk/'),(5,'Test Partner2','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo',1,0,1,'2023-12-24 06:56:11','2023-12-24 06:56:11','test-partner2','https://staging.perthshirecc.co.uk/'),(6,'Test Partner','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo',1,0,1,'2024-01-03 09:35:32','2024-01-03 09:35:32','test-partner','http://gmc.test/');
/*!40000 ALTER TABLE `platinum_partners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint unsigned NOT NULL,
  `permission_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  KEY `role_has_permissions_permission_id_foreign` (`permission_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `guard` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (5,'admin',1,0,NULL,NULL,'admin'),(6,'user',1,0,NULL,NULL,'user'),(8,'employee',1,0,NULL,NULL,'employee');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `space_finders`
--

DROP TABLE IF EXISTS `space_finders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `space_finders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_approved` tinyint DEFAULT '1',
  `user_id` bigint DEFAULT '0',
  `mobile_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `venue_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categories` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `space_finders`
--

LOCK TABLES `space_finders` WRITE;
/*!40000 ALTER TABLE `space_finders` DISABLE KEYS */;
INSERT INTO `space_finders` VALUES (9,'abc','<p>https://www.abc.com</p>',1,0,'2023-11-01 21:59:39','2023-11-12 23:29:06',1,66,'11111111111','11111111111','abc@gmail.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','abc',NULL),(10,'Dolor voluptatibus e','<p>sdzf dszf szdf dszf sdzfsz fsdz fdsfsdzfsdzfsd fgegdsafg sdafafgafsadg sgds</p>',1,0,'2023-11-10 19:02:37','2023-11-12 23:28:11',1,62,'+ (573) 825-9274','+ (573) 825-9274','pomykadove@mailinator.com','Quos veniam adipisc','https://pcc.flonix.com/','https://pcc.flonix.com/','https://pcc.flonix.com/','Voluptas harum quaer','Accusamus saepe eum','Itaque voluptatum de','abc1',NULL),(11,'test22','<p>best locations</p>',1,0,'2023-11-10 19:14:55','2023-11-10 19:14:55',1,66,'0','0','daml@test.com','00','00','00','00','00','00','00',' ',NULL),(12,'test','<p>test space finder</p>',1,0,'2023-11-12 21:37:58','2023-11-12 22:18:48',1,62,'hh','hh','test','hh','hh','hh','hh','hh','https://www.abc.com','hh','test1202',NULL),(13,'Dolore blanditiis au','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',1,0,'2023-11-12 21:42:58','2023-11-12 21:42:58',1,66,'155886633556','+1 (624) 572-5933','suse@mailinator.com','Eos asperiores moll','https://pcc.flonix.com/','https://pcc.flonix.com/','https://pcc.flonix.com/','https://pcc.flonix.com/','https://pcc.flonix.com/','https://pcc.flonix.com/','aut-a',NULL),(14,'test 123','<p>this is just a test</p>',1,0,'2023-11-12 21:47:43','2023-11-12 21:58:12',1,67,'+1 (629) 981-4148','+1 (629) 981-4148','naqusuhehe@mailinator.com','Quisquam eos deserun','https://pcc.flonix.com/','https://pcc.flonix.com/','https://pcc.flonix.com/','https://pcc.flonix.com/','https://pcc.flonix.com/','https://pcc.flonix.com/','magnam-e',NULL),(15,'Quis incidunt et et','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',1,0,'2023-12-15 10:40:48','2023-12-18 10:41:11',0,69,'12457800044','12544154411','feva@mailinator.com','Quos in rem qui labo','http://gmc.test/','http://gmc.test/','http://gmc.test/','http://gmc.test/','http://gmc.test/','http://gmc.test/',NULL,'Aliquam molestias ac');
/*!40000 ALTER TABLE `space_finders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscription_items`
--

DROP TABLE IF EXISTS `subscription_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscription_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subscription_id` bigint unsigned NOT NULL,
  `stripe_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_product` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subscription_items_subscription_id_stripe_price_unique` (`subscription_id`,`stripe_price`),
  UNIQUE KEY `subscription_items_stripe_id_unique` (`stripe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscription_items`
--

LOCK TABLES `subscription_items` WRITE;
/*!40000 ALTER TABLE `subscription_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscription_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscriptions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subscriptions_stripe_id_unique` (`stripe_id`),
  KEY `subscriptions_user_id_stripe_status_index` (`user_id`,`stripe_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriptions`
--

LOCK TABLES `subscriptions` WRITE;
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_email_verified` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `signin_at` datetime DEFAULT NULL,
  `is_logout` tinyint(1) NOT NULL DEFAULT '0',
  `logout_at` datetime DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_login` tinyint(1) DEFAULT '0',
  `login_at` timestamp NULL DEFAULT NULL,
  `stripe_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_last_four` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `last_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postalcode` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` tinyint DEFAULT '0',
  `username` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_no` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `venue_url` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_stripe_id_index` (`stripe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (60,'admin','admin@gmail.com','03332424345','2023-10-14 07:55:16',0,'$2y$10$siVjd8k6VvqYKgExJI7Exu2wRVHm3Td5HxHfmeke5V6Vz0MkWTL3a',1,0,'2023-10-21 09:10:24',0,'2024-02-13 12:18:29',NULL,NULL,'2024-02-13 07:18:29',0,'2024-02-13 07:17:43',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(62,'Xena','gagorahyn@mailinator.com','1 2919651647',NULL,0,'$2y$10$uW88SHkbQvTtJdYqHfCff.OqCzjWFDSfu/Y4OXIVKcwzY.2GmKQUy',1,0,NULL,0,'2024-02-13 12:08:02',NULL,'2023-10-22 03:25:39','2024-02-13 07:08:02',0,'2024-02-13 07:07:38',NULL,NULL,NULL,NULL,'Hodges','Middleton Donaldson Inc','Molestias totam itaq','Temporibus est fuga',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(66,'Xena','gagorahyn1@mailinator.com','1 2919651647',NULL,0,'$2y$10$bF0iUhFkc6wIjpfeufLbzelkMenZn5K/EsfCJzjnmYD/Om9Kttrr.',1,0,NULL,0,NULL,NULL,'2023-10-22 03:31:46','2024-02-13 07:10:33',0,NULL,NULL,NULL,NULL,NULL,'Hodges','Middleton Donaldson Inc','Molestias totam itaq','Temporibus est fuga',1,'xena','1312323333','http://gmc.test/','http://gmc.test/','http://gmc.test/','http://gmc.test/','http://gmc.test/','http://gmc.test/'),(67,'Hillary','jufymeqew@mailinator.com','3161620852',NULL,0,'',1,0,NULL,0,NULL,NULL,'2023-10-22 08:11:35','2023-10-22 08:12:03',0,NULL,NULL,NULL,NULL,NULL,'Roman','Morton Hale Plc','Neque molestiae temp','Id harum dolores ut',1,'adminuser',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(68,'Hope','qopegafo@mailinator.com','12356487965',NULL,0,'$2y$10$8MK2thXDeVW8zAzidXAPK.SwxjBMv1dBRNDdmSeZTFkdXTdfCsrFi',1,0,NULL,0,'2023-12-01 09:56:33',NULL,'2023-10-22 08:20:01','2024-02-04 22:34:30',1,'2024-02-04 22:34:30',NULL,NULL,NULL,NULL,'Howell','Jenkins and Petty Inc','Delectus eos non n','Aut iste sapiente mi',1,'hezelu',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(69,'Acton','fusohidim@mailinator.com','1235478622',NULL,0,'$2y$10$kQ8d8w/QeX1l6o1FShYjRONrEYkmCWUScbdYQiLOgTS4ApRurPtlG',1,0,NULL,0,'2024-01-15 12:56:33',NULL,'2023-10-28 07:52:43','2024-02-19 09:28:51',1,'2024-02-19 09:28:51',NULL,NULL,NULL,NULL,'Finley','Sherman Cotton Traders','Earum earum id paria','Commodo obcaecati au',1,'ririqir','02145786622222','https://www.cuxykyfafe.ws','https://www.cuxykyfafe.ws','https://www.cuxykyfafe.ws','https://www.cuxykyfafe.ws','https://www.cuxykyfafe.ws','https://www.cuxykyfafe.ws'),(70,'Ghazanfar','ghazanfar3@gmail.com','31516208522',NULL,0,'$2y$10$B1pac88PpHqI6tBvBoEEgOLtNZT1sicJALxlHRgTiYVX6QhxDcDPG',1,0,NULL,0,'2024-02-13 12:17:28',NULL,'2024-02-13 07:16:00','2024-02-13 07:18:47',1,'2024-02-13 07:18:47',NULL,NULL,NULL,NULL,'Ahsan',NULL,'sdfdsafdsfs dafsa fsdaf','78542',1,'ghazanfar','31516208522','http://gmc.test/','http://gmc.test/','http://gmc.test/','http://gmc.test/','http://gmc.test/','http://gmc.test/');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'gmc'
--

--
-- Dumping routines for database 'gmc'
--
/*!50003 DROP PROCEDURE IF EXISTS `messages` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `messages`(IN id bigint,IN user_id bigint)
BEGIN
	SELECT 
		users.first_name as name,s.sender_id,s.reciever_id,users.is_login,s.message,s.created_at,
        DATE_FORMAT(s.created_at, '%b %e, %Y, %l:%i %p') as message_date,images.image_url
	FROM 
		users
    JOIN 
		messages s
    ON
		s.sender_id = users.id 

	JOIN	
		images
	ON
		s.sender_id = images.model_id and images.model = 'App\\Models\\User'
        
	WHERE 
		(s.sender_id = id AND s.reciever_id = user_id)
	OR 
		(s.reciever_id = id AND s.sender_id = user_id)
	order by s.created_at asc;
	
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `users_mesage_list` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `users_mesage_list`(IN user_id bigint,in page_no bigint,IN pages bigint)
BEGIN
	DECLARE pageNo bigint;
    DECLARE totalPages bigint;
    
    IF pages = 0 then
		set totalPages = 1000000000;
	else 
		set totalPages = pages;
	end IF;
    
    
    IF page_no = 0 then
		set pageNo = 1;
	else 
		set pageNo = page_no;
	end IF;
            
SELECT * from (
	Select id,name,message,created_at,image_url,SUM(unread_messages) as  unread_messages,
    CASE 
    WHEN DATEDIFF(NOW(),created_at) > 0 THEN CONCAT(DATEDIFF(NOW(),created_at) , ' day')
    WHEN TIMESTAMPDIFF(HOUR, created_at, NOW()) > 0 THEN CONCAT(TIMESTAMPDIFF(HOUR, created_at, NOW()) , ' hour')
    WHEN TIMESTAMPDIFF(MINUTE, created_at, NOW()) > 0 THEN CONCAT(TIMESTAMPDIFF(MINUTE, created_at, NOW()) , ' min')
    ELSE CONCAT(TIMESTAMPDIFF(SECOND, created_at, NOW()) , ' sec')
    END
     as message_time
    
    from (
		(
        Select 
			users.id,users.first_name as name,images.image_url,messages.message,messages.created_at, 
            DAY(messages.created_at) AS day, MONTH(messages.created_at) AS month,YEAR(messages.created_at) AS year,
			(
				SELECT SUM(CASE WHEN m.is_read = 0 THEN 1 ELSE 0 END) FROM messages as m where m.sender_id = users.id and m.reciever_id = 69
            
            ) as unread_messages
        from 
			users 
		join 
			messages 
		on 
			messages.sender_id = users.id
		join 
			images 
		on 
			(images.model_id = users.id and images.model = 'App\\Models\\User')
            
		where 
			messages.reciever_id = user_id
        order by messages.created_at desc 
        
        )
        
        UNION 
        
       ( Select 
			users.id,users.first_name as name,images.image_url,messages.message,messages.created_at,
           
            DAY(messages.created_at) AS day, MONTH(messages.created_at) AS month,YEAR(messages.created_at) AS year,
			 0 as unread_messages
        from 
            users 
		join 
			messages 
		on 
			messages.reciever_id = users.id 
		join 
			images 
		on 
			(images.model_id = users.id and images.model = 'App\\Models\\User')
	
		where messages.sender_id = user_id
        order by messages.created_at desc 
        )
    ) as chat group by id
 
    
) as chatUser order by created_at desc 
	limit totalPages     ;
	
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-22  0:12:41
