-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 23, 2026 at 11:53 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pegawai_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'guru_tendik',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', NULL, 'admin@gmail.com', 'admin', NULL, '$2y$12$NeDZHKhqbBQozCoEfs3UReBmOzWnO/NGojA0GfI/4BGoo2JVF2qa6', '8ISau3F5AlS9brjmmUeytexDnPWdOYbKuLBSkbz3A1bAQRAXjL39A2OkY4k1', '2026-07-08 13:50:47', '2026-07-16 06:14:44'),
(4, 'Guru dan Tendik', NULL, 'guru.tendik@gmail.com', 'guru_tendik', NULL, '$2y$12$zsORLyEr4lRqQrtYEF8kFOWhz1882KLPhlznCwip68vPPNQG1cVaC', 'KH6b1hR6df5u3qwEaDwnu61Kl5ej0vGkzEc4Kyem0nTB97n85iolMmB0ezVl', '2026-07-16 06:14:44', '2026-07-16 06:14:44'),
(5, 'Kepala Sekolah', NULL, 'kepsek@gmail.com', 'kepsek', NULL, '$2y$12$mZb7hN4EJwBzLfObItcWte.fp/f.3ECcPsd1koerqKIYof92U9x2W', 'AXbccjYlNSzaALPoxwseZRlWqWLLO2cRN0yoivxExBnRX2kHRkUhf5ssxGtm', '2026-07-16 06:14:45', '2026-07-16 06:14:45'),
(66, 'Mefi', 'mefi', 'mefi@sdplusigm.local', 'kepsek', NULL, '$2y$12$foY2DyyJrsrcacFNQ45PUumhY1gLM4UHgZveN4oIUiC6IwH9CvHwC', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(67, 'Ana', 'ana', 'ana@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$hStoFvLCEVRu/l/xyaCqzOd1aMpiZRSQ8wwoAyUhp5mfPg55BmhoS', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(68, 'Agus', 'agus', 'agus@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$4.0PGW5R0YTDXHCDJjvfY.UzygLIOE2/4UQDf6hYd3KK33vzDFLSK', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(69, 'Dovie', 'dovie', 'dovie@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$IqrjRj9mSMKqVx2QnNG2e.V8KpQQtzQ2VWuzEAOUekAXEJK8MYeyy', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(70, 'Bayun', 'bayun', 'bayun@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$ufdeUprxQ2TyejLmCbRlie/mi8o3pmmxCThSoK9l63xZe1d9Xlf6C', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(71, 'Diah', 'diah', 'diah@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$jpdpNMumee3hc7sjH6VKNOb14qUDCgGvtHorzVss8UH0WAY/0kFVS', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(72, 'Diana', 'diana', 'diana@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$KaIXvBvg.RbaftRcmmb9F.rhZYwqRT9mJyCWGAUYjt6cmJdn6H8Vm', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(73, 'Marini', 'marini', 'marini@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$59qkrkRPB9u4gGxZAJUm4uAKy2ChHhCW8UicAqoyr6eeq/3Z6xuTe', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(74, 'Dara', 'dara', 'dara@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$/3CQ5SI1sj66Dil/KosbwO.fPID5Jk.vkxkf7tTEcSfculCJHiA0W', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(75, 'Eka', 'eka', 'eka@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$hDxgvWywYGjYaDtO2HN67O997CNzmsDnNeeJwVkQNDQtCFjo5JDZ.', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(76, 'Reny', 'reny', 'reny@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$bl.DGnJzfG/xMjd/wcfYx.sno4ks6WX1E5rrOAYC9llrclcpluFLi', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(77, 'Fera', 'fera', 'fera@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$OrzKfgjUCZYTpUv2Oakvt.K7q41hpH/tKT2nz7CI8PnB6sjfp6xLe', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(78, 'Isma', 'isma', 'isma@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$G9AUFz/zyrhfWuSZklrXe.powiif6Lu3TXVywuj4Mq8Ncby5wAs4q', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(79, 'Lenny', 'lenny', 'lenny@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$SU/it3dgbFnco.Fa40SFfugLNksGYUsWkbrc4BAHWckFN3ZIJNmzy', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(80, 'Nurkholis', 'nurkholis', 'nurkholis@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$NB/Uy2kzp5.bV5Xn7a2HFeo3ctpMDWYA.2fMKDVchvK9hYr0LuJgi', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(81, 'Wiwik', 'wiwik', 'wiwik@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$9PGfdEdIpwJKbcQosHj1ru8kOnQXQlrth5C3HunzKqP6Ghyyxz.iG', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(82, 'Atika', 'atika', 'atika@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$xMoTs8PqfXZMyGntEhh1LeCK.TVnup70kN8nms1QwQKucGcpDJi3O', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(83, 'Nita', 'nita', 'nita@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$L9BzlIuMJyLzLIAfk8SsXujw1Vj7iewOPfL5S9w98YwKwTjkQno1W', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(84, 'Ustad Andi', 'ustad andi', 'ustad.andi@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$ig5fwrmvAvDiXH6hhcoe/eDROYIwt/ZGY4fPJ.eoAXFSAcdgbgicO', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(85, 'Edwar', 'edwar', 'edwar@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$WcqhTP.5L2kIqukd6UYyeemchJ8H1LawwQHZLR.ekQZcMBbb00fzG', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(86, 'Septian', 'septian', 'septian@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$z9VueChd7pWTU3a4QeTl5uhVceOIBR96wIRSupn0rKAVT79OrXvxO', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(87, 'Rika', 'rika', 'rika@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$k0GyjRw/2CV9nuv9Pu5sZOAzvrhKLCnd9No2Lbq74TlonCZSiI/Ea', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(88, 'Roni', 'roni', 'roni@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$b635yaekXpsvSLZPF3OetOiIzsEGuVFFDADkErMjDSly8MoWeARfG', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(89, 'Habibi', 'habibi', 'habibi@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$M1E3UNhdp5FmJyRvl0ojiuzBjL8cweQLiCjU0nZ2GdHoyw6g2Paqa', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(90, 'Imron', 'imron', 'imron@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$q7p9zANV.zOc/X..i2nDoe9UffEuQ0E3UR2ERcPKAPtSLgCUe3BdG', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(91, 'Rendy', 'rendy', 'rendy@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$8IFSAB8Wzxa/Z1havDylae6wYNgUur9ipfJNpGPwGbNmPlMSwQ3Y6', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(92, 'Indri', 'indri', 'indri@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$y.cugLY2P7QEHDkCZECM8uyvG4Xvpz2DJnoXCvL8qrWeeKfaF4Qre', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(93, 'Bella', 'bella', 'bella@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$BBBTrWabXzJXfbmyObswx.ZpzbVUxtB/fFK6d2C5QR3rEKUc25/Yy', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(94, 'Meri', 'meri', 'meri@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$D/lV.lL2yHUfWpum3kLYjOrcKQ6vlIiXexl6T3dHY0AV.JrTWBKdK', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(95, 'Aminah', 'aminah', 'aminah@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$L6OWx4zo0UzcusOltt/RRuhJDwTQ43hyJThgq2pUi/euidnV2Wciy', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(96, 'Dwinta', 'dwinta', 'dwinta@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$EKxZNxPrnNQhddradatE0eQvuwRoCUGtDMdMtzVoAaqZDw8zigtUC', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(97, 'Reyes', 'reyes', 'reyes@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$7lv/inTeaOQnQED/7JiZGuU6KuauFKjm3Ffp9Cda9/Q7tNC6fYoZq', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(98, 'Meyka', 'meyka', 'meyka@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$SsNmJnCtKKF0LAtuYLQVQuvoK7HC5rMGUl5hVkM2fKKaD/fquoF3q', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(99, 'Candra', 'candra', 'candra@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$cSm8633cyCYT7MN6UZutiORTE9a22todiBNShikLPCiuLsp0m9wTO', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(100, 'Handoko', 'handoko', 'handoko@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$ENdziT.HLpOr.rEZVSVjzuSdmqOzjGdJcTRTOuOHbf84o4OfUrF5q', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(101, 'Hafiz', 'hafiz', 'hafiz@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$sidKLHFuMB/L5m22ebQTlOw.bz.qRI4veS2MEvpQvbMo7tbNWxvUm', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(102, 'Weny', 'weny', 'weny@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$tOb/VAvilE9KSLEtjT/fTecgW/57VPdaPfnX2Vml6D9kqH/mvHjLC', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(103, 'Nani', 'nani', 'nani@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$dgUHBEJOULb5ESrlGTw7t.1BaekVaTppPrSskzIBJz/KoYw6FGha.', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(104, 'Atik', 'atik', 'atik@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$zo.77ZJ.oMDsAFAIGT11BuQVaqbuiX718QOxvb8dygdAqPwSoqO46', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(105, 'Budi', 'budi', 'budi@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$hAdRad7nLbAVwWluE4.1Wuc1EvsjwufQN5XEE8sDInMbg2wUZ/GEW', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(106, 'Yuni', 'yuni', 'yuni@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$L9KkfY6vq7OhGYHGRkDQ9uWBLRkPRyZQ56XieuFT2faRH0kDRX3QC', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(107, 'Rian', 'rian', 'rian@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$cfPucuUgHyOnx0pHvWvdq.q6PdKJPdJwNCWk88zft1oWxexXKj44q', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(108, 'Dzun', 'dzun', 'dzun@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$SLNtiNH.0.pc.IROdoRFxed2.53hOLKcOyjHeyTj9psgwvvjDpgGe', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(109, 'Wirawan', 'wirawan', 'wirawan@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$.5s2NEVYJUYYNapIFuZzk.713tk7Y.xg8CJnXo1JbDagCvqZdT2Ni', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(110, 'Kurnia', 'kurnia', 'kurnia@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$2ZyrbZ0Wvxw1stZS0zI42eJz5MI9r2ug1LgBeMzJwgk18D4RXT24W', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(111, 'Indah', 'indah', 'indah@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$Bjwy2A3H7oeqflIboKSj9eCbrlpVbwo3TlH/aorV6qbojQ1H/Nk.K', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(112, 'Rika47', 'rika47', 'rika47@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$rVSGbV9dm7EnP9xfgKJsb.dq9DCu4WkapJpCArTGVQ/nyd2PPCdmW', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(113, 'Nanda', 'nanda', 'nanda@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$9ARkWhUZLOqLEhnUPJ9f0.rFwyn4y0NU9i2cRpqiu2kDWzTqLqbWG', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(114, 'Winda', 'winda', 'winda@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$d0xszc7wyghSqGnJsbAd7OAzQn5ct40qP6lJ/WE35MszU16PkX34W', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(115, 'Al', 'al', 'al@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$0OlCDLJLaOWXMW6P5.kJ.eR.DLuhSdcnMkO/zkVRyBq3PPHhEvtV2', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(116, 'Wenny', 'wenny', 'wenny@sdplusigm.local', 'admin', NULL, '$2y$12$YvF4EJyCsB4Qf.Fe.d6dr.jdzUrnlsSx4qqIZvJEhswf1alWUktbi', 'v48HuJ96pdjetVXEGv3LTiZZFICVCurjVzXYzEnUSrHnfbajffSOkx3LCLkC', '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(117, 'Nyimas', 'nyimas', 'nyimas@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$vOhKONg12VPnXmDRNally.jOtBjY6vweYYuNrGP5kyI8uTnH6dO0e', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(118, 'Adi', 'adi', 'adi@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$gG0e8a/w71qjMc15hod.L.uuKb/X.//ReCK63zHiWeSPPSkc.L4mq', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(119, 'Gogo', 'gogo', 'gogo@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$gtKABADhV9XM7v5o4f/8DOZpVh8yzvA1g.8LbqEJyh6t.zp4l/mwS', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(120, 'Asma', 'asma', 'asma@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$zbzgT9CMhxwqA59lSkLPJOgLIvcn4BBPudzuMrs2qbxS2W7N1MiPq', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(121, 'Emil', 'emil', 'emil@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$Kpi3T/GlpgjP77/alwuMxew2khxANH7JY2H7gfi.cJoBUNTCV0xFe', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(122, 'Iron', 'iron', 'iron@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$TvIXvTFz2/UiJS576KOKz.4lFufM5j7G2uaxnC.WLoCcjGaXU/wEO', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(123, 'Pomi', 'pomi', 'pomi@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$PAEPq/ssMvatHLmQ7x2Ds.jwJ9b2hDgaDJu6BHz4wtOIdyyt.1NRu', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(124, 'Ruspen', 'ruspen', 'ruspen@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$Z2Ic4/pqv/xJItXVocTQUOPLMY/4n4mRYpAkuED9EFXmSRFuYCD.i', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29'),
(125, 'Anton', 'anton', 'anton@sdplusigm.local', 'guru_tendik', NULL, '$2y$12$6dJnchUwzx2Y81MTPmHFA..rOOQTb9v6lIYNf5aP43H26Li8tjJwy', NULL, '2026-07-23 23:40:29', '2026-07-23 23:40:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
