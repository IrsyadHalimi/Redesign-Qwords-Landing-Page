<?php
  // memanggil bagian-bagian section pada setiap file untuk membentuk halaman utama

  // header
  include_once("component/core/header.php");

  // menu navigasi dibagian atas 
  include("component/parts/navbar.php");

  // section hero, konten pertama dihalaman meliputi teks, tombol pesan dan gambar
  include("component/parts/hero.php");

  // badge, menampilkan badge pencapaian perusahaan Qwords
  include("component/parts/badge.php");

  // section search domain, meliputi input teks dan option domain
  include("component/parts/search_domain.php");
  
  // section product card, detail layanan produk
  include("component/parts/featured_card.php"); 

  // section product card, detail layanan tambahan
  include("component/parts/additional_product.php"); 

  // menampilkan solusi untuk setiap bidang
  include("component/parts/solution.php"); 

  // menampilkan commitment Qwords
  include("component/parts/commitment.php"); 

  // menampilkan banner promo pembuatan website
  include("component/parts/promo_banner.php"); 

  // menampilkan daftar customer Qwords
  include("component/parts/customer.php"); 

  // menampilkan daftar partner Qwords
  include("component/parts/partner.php"); 

  // menampilkan banner promo 
  include("component/parts/guarantee_banner.php"); 
  include("component/parts/testimonial.php"); 
  include("component/parts/covered.php"); 
  include("component/parts/payment.php"); 
  include("component/parts/qna.php"); 
  include("component/parts/contact.php"); 
  include("component/parts/office.php"); 
  include_once("component/core/footer.php"); 
?>