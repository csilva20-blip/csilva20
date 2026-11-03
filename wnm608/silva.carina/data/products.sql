-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2026 at 06:49 PM
-- Server version: 10.11.19-MariaDB-cll-lve
-- PHP Version: 8.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csilva20_wnm608_storefront`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `sku` varchar(64) NOT NULL,
  `handle` varchar(255) NOT NULL,
  `url` varchar(500) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `instructions` text DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `collection` varchar(64) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `size` varchar(20) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `compare_at_price` decimal(10,2) NOT NULL,
  `status` varchar(64) NOT NULL DEFAULT 'draft',
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `badge` varchar(32) DEFAULT NULL,
  `thumb_image_url` varchar(500) DEFAULT NULL,
  `images` varchar(512) DEFAULT NULL,
  `seo_title` varchar(64) NOT NULL,
  `meta_description` varchar(160) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `handle`, `url`, `title`, `description`, `instructions`, `category`, `collection`, `tags`, `size`, `price`, `compare_at_price`, `status`, `is_featured`, `badge`, `thumb_image_url`, `images`, `seo_title`, `meta_description`, `date_created`, `date_modified`) VALUES
(3, 'CC-CLN-001', 'ground-sensitive-scalp-shampoo', '', 'Ground | Sensitive Scalp Shampoo', 'Wash day should never irritate. Ground cleanses with coconut-derived cleansers, while aloe and oat soothe tender, flaky skin so your scalp stays calm long after you rinse. Made in small batches, warm with vanilla and amber, and free of sulfates and silicones. Warm a small amount between your palms. Massage into a wet scalp, then rinse slowly.', '', 'Shampoo', 'Cleanse / Begin with a clean root.', 'sensitive-scalp,flaky-scalp,oat,red-clay,sulfate-free,silicone-free,small-batch,2c-4c', '12 oz', 26.00, 0.00, '', 1, '', NULL, '', '', '', '2026-01-01 12:06:15', '2026-11-01 15:08:10'),
(4, 'CC-RST-001', 'ground-sensitive-scalp-conditioner', '', 'Ground | Sensitive Scalp Conditioner', 'Your coils deserve softness that stays. Small-batch shea and aloe soften and detangle, while oat keeps tender scalps calm and comfortable. Light enough for fine curls and rich enough for coils, with a soft amber and vanilla scent. Sulfate-free and silicone-free. Warm a small amount between your palms. Smooth through damp sections, root to tip, then rinse after a slow three minutes.', '', 'Conditioner', 'Restore / Mend what heat and color take.', 'sensitive-scalp,oat,shea,aloe,detangling,sulfate-free,silicone-free,small-batch,2c-4c', '12 oz', 28.00, 0.00, '', 0, '', NULL, '', '', '', '2026-03-13 08:13:08', '2026-11-01 15:08:10'),
(5, 'CC-CLN-002', 'Temper-color-heat-repair-shampoo', '', 'Temper | Color & Heat Repair Shampoo', 'Your coils deserve a wash that protects the work you have put in. Temper lifts buildup with gentle coconut-derived cleansers, while amino acids strengthen weakened strands and sunflower seed oil leaves a soft finish. Color stays vivid longer and heat-worn curls feel replenished. Small-batch, sulfate-free, and silicone-free. Warm a small amount between your palms. Smooth through wet hair, root to tip, then rinse.', '', 'Shampoo', 'Cleanse / Begin with a clean root.', 'color-safe,heat-damage,amino-acids,sulfate-free,silicone-free,small-batch,2c-4c', '12 oz', 28.00, 0.00, '', 0, '', NULL, '', '', '', '2026-01-01 12:06:15', '2026-11-01 15:08:10'),
(6, 'CC-RST-002', 'Temper-color-heat-repair-conditioner', '', 'Temper | Color & Heat Repair Conditioner', 'Slow, steady repair for hair that has met the flat iron. Avocado oil replenishes, panthenol helps strands hold moisture, and amino acids rebuild strength where color and heat have worn it thin. Small-batch, silicone-free, and finished with soft amber. Warm a small amount between your palms. Smooth through damp sections, root to tip, then rinse after a slow three minutes.', '', 'Conditioner', 'Restore / Mend what heat and color take.', 'color-safe,heat-damage,avocado-oil,panthenol,silicone-free,small-batch,2c-4c', '12 oz', 30.00, 0.00, '', 0, '', NULL, '', '', '', '2026-03-13 08:13:08', '2026-11-01 15:08:10'),
(7, 'CC-CLN-003', 'Hearth-protective-styling-wash', '', 'Hearth | Protective Styling Wash', 'Stay in your style longer, without the dryness. Hearth cleanses 4C scalps and lengths without roughing up your braids or twists. Aloe hydrates, oat calms, and glycerin draws in moisture so hair stays soft until your next wash day. Small-batch, sulfate-free, and silicone-free. Dilute a small amount with warm water in an applicator bottle. Apply along the parts, massage gently, and rinse well.', '', 'Wash', 'Cleanse / Begin with a clean root.', 'protective-style,4c,aloe,oat,glycerin,sulfate-free,silicone-free,small-batch', '12 oz', 26.00, 0.00, '', 0, '', NULL, '', '', '', '2026-01-01 12:06:15', '2026-11-01 15:08:10'),
(8, 'CC-SEL-001', 'Slip-protective-styling-oil', '', 'Slip | Protective Styling Oil', 'A slow, warm finish for the end of your styling ritual. Slip pairs jojoba and sweet almond oil to lock moisture into 4C hair without a greasy feel. Vanilla bean extract adds a soft, sweet scent. Small-batch and silicone-free. Warm a few drops between your palms. Smooth along your parts and over your lengths, root to tip.', '', 'Oil', 'Seal / Keep the softness in.', 'protective-style,4c,jojoba,sweet-almond-oil,silicone-free,small-batch', '4 oz', 29.00, 0.00, '', 0, '', NULL, '', '', '', '2026-07-31 09:05:07', '2026-11-01 15:08:10'),
(9, 'CC-SHP-001', 'Drift-leave-in-styling-cream', '', 'Drift | Leave-In Styling Cream', 'Your curls deserve something that stays. Drift wraps 2-3C curls in lightweight moisture. Shea butter and aloe soften, flaxseed extract encourages clumping, and panthenol helps strands hold moisture without weight. Small-batch and silicone-free, with a soft amber and vanilla scent. Warm a small amount between your palms. Smooth through damp sections, root to tip, then diffuse or air-dry.', '', 'Styling Cream', 'Shape / Define every coil.', 'definition,2c-3c,shea,aloe,flaxseed,silicone-free,small-batch', '8 oz', 32.00, 0.00, '', 1, '', NULL, '', '', '', '2026-05-01 06:19:37', '2026-11-01 15:08:10'),
(10, 'CC-SHP-002', 'keystone-strong-hold-base-gel', '', 'Keystone | Strong Hold Base Gel', 'Your coils deserve definition that lasts. Keystone gives 2-3C curls firm, flexible hold. Flaxseed extract defines each clump, aloe adds moisture, and a touch of shea keeps the finish soft once the cast is released. Made in small batches and free of silicones. Warm a small amount between your palms. Smooth through damp sections, root to tip, then diffuse or air-dry before scrunching out the cast.', '', 'Gel', 'Shape / Define every coil.', 'strong-hold,2c-3c,flaxseed,aloe,shea,silicone-free,small-batch', '8 oz', 30.00, 0.00, '', 0, '', NULL, '', '', '', '2026-05-01 06:19:37', '2026-11-01 15:08:10'),
(11, 'CC-SEL-002', 'shade-heat-protectant-spray', '', 'Shade | Heat Protectant Spray', 'Your coils deserve protection that does not weigh them down. Shade mists on weightless and dries soft. Hydrolyzed quinoa protein coats the strand, glycerin helps hold moisture, and a touch of shea keeps ends supple. Made in small batches and free of silicones. Mist over damp or dry sections, root to tip, before heat styling. Comb through gently.', '', 'Heat Protectant', 'Seal / Keep the softness in.', 'heat-protection,quinoa-protein,glycerin,shea,silicone-free,small-batch,2c-4c', '6 oz', 27.00, 0.00, '', 0, '', NULL, '', '', '', '2026-07-31 09:05:07', '2026-11-01 15:08:10'),
(12, 'CC-SHP-003', 'Plume-volumizing-mist', '', 'Plume | Volumizing Mist', 'Body that moves with your curls. Plume gives fine, flat roots a gentle lift without stiffness. Rice protein thickens the strand, panthenol keeps it supple, and sea minerals add texture so volume lasts through the day. Small-batch, silicone-free, with a warm amber note. Mist at the roots of damp hair, section by section. Diffuse or air-dry.', '', 'Mist', 'Shape / Define every coil.', 'volume,rice-protein,sea-minerals,panthenol,silicone-free,small-batch,2c-4c', '6 oz', 26.00, 0.00, '', 0, '', NULL, '', '', '', '2026-05-01 06:19:37', '2026-11-01 15:08:10'),
(13, 'CC-RST-003', 'slow-fire-repair-mask', '', 'Slow Fire | Repair Mask', 'Your coils deserve something that rebuilds. Slow Fire is a deep treatment for hair worn by heat, color, and time. Amino acids strengthen, avocado oil replenishes, and red clay clears away buildup so each ingredient can work. Mixed in small batches and finished with soft vanilla. Silicone-free. Warm a generous amount between your palms. Smooth through damp sections, root to tip. Leave for ten to fifteen minutes, then rinse.', '', 'Mask', 'Restore / Mend what heat and color take.', 'repair,amino-acids,avocado-oil,red-clay,silicone-free,small-batch,2c-4c', '8 oz', 42.00, 0.00, '', 0, '', NULL, '', '', '', '2026-03-13 08:13:08', '2026-11-01 15:08:10'),
(14, 'CC-RST-004', 'Monsoon-hydrating-mask', '', 'Monsoon | Hydrating Mask', 'Your coils deserve moisture that stays. Monsoon layers hyaluronic acid to pull in water, shea and murumuru butters to seal it, and panthenol to keep strands supple. Made in small batches with a soft amber and vanilla finish. Silicone-free. Warm a generous amount between your palms. Smooth through damp sections, root to tip, and rinse after fifteen minutes.', '', 'Mask', 'Restore / Mend what heat and color take.', 'hydration,hyaluronic-acid,shea,murumuru,panthenol,silicone-free,small-batch,2c-4c', '8 oz', 40.00, 0.00, '', 1, '', NULL, '', '', '', '2026-03-13 08:13:08', '2026-11-01 15:08:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`),
  ADD UNIQUE KEY `handle` (`handle`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
