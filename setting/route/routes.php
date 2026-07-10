<?php

namespace Setting\route;

use App\Models\Router\Routes;
use Setting\Route\Function\Functions;
use App\Controllers\HomeController;
use App\Controllers\LeadController;
use App\Controllers\SeoController;
use App\Controllers\CartController;
use App\Controllers\CheckoutController;
use App\Controllers\CourierController;

//==================================================================================================// MAIN
Routes::get('/', [HomeController::class, 'onIndex']);
Routes::get('/blog', [HomeController::class, 'onBlog']);
Routes::get('/blog/article/{id}', [HomeController::class, 'onBlogArticle']);
Routes::get('/privacy-policy', [HomeController::class, 'onPrivacy']);
Routes::get('/products', [HomeController::class, 'onProducts']);
Routes::get('/about', [HomeController::class, 'onAbout']);
Routes::get('/before-after', [HomeController::class, 'onBeforeAfter']);
Routes::get('/contacts', [HomeController::class, 'onContacts']);
Routes::get('/order', [HomeController::class, 'onOrder']);

//==================================================================================================// LEADS
Routes::post('/api/lead', [LeadController::class, 'onSubmit']);

Routes::post('/franchise/apply', [HomeController::class, 'onFranchiseSubmit']);
Routes::post('/send/mail', [Functions::class, 'onMail']);
Routes::post('/courier/request', [CourierController::class, 'onRequest']);

Routes::get('/cart', [HomeController::class, 'onCart']);
Routes::post('/cart/add', [CartController::class, 'onAdd']);
Routes::post('/cart/update', [CartController::class, 'onUpdate']);
Routes::post('/cart/remove', [CartController::class, 'onRemove']);
Routes::post('/cart/get', [CartController::class, 'onGet']);
Routes::post('/cart/comment', [CartController::class, 'onComment']);
Routes::get('/checkout', [CheckoutController::class, 'onGenerate']);
Routes::get('/franchise', [HomeController::class, 'onFranchise']);
Routes::get('/requisites', [HomeController::class, 'onRequisites']);
Routes::get('/product/{slug}', [HomeController::class, 'onProductDetail']);
Routes::get('/product', [HomeController::class, 'onProducts']);

//==================================================================================================// SEO & FEEDS
Routes::get('/robots.txt', [SeoController::class, 'onRobots']);
Routes::get('/sitemap-index.xml', [SeoController::class, 'onSitemap']);
Routes::get('/sitemap.xml', [SeoController::class, 'onSitemap']);
Routes::get('/sitemap-{name}.xml', [SeoController::class, 'onSitemapChild']);
Routes::get('/rss.xml', [SeoController::class, 'onRss']);
Routes::get('/feed.xml', [SeoController::class, 'onFeed']);
Routes::get('/atom.xml', [SeoController::class, 'onAtom']);
Routes::get('/llms.txt', [SeoController::class, 'onLlms']);
Routes::get('/llms-full.txt', [SeoController::class, 'onLlmsFull']);
Routes::get('/manifest.json', [SeoController::class, 'onManifest']);
Routes::get('/site.webmanifest', [SeoController::class, 'onWebmanifest']);
Routes::get('/opensearch.xml', [SeoController::class, 'onOpensearch']);
Routes::get('/humans.txt', [SeoController::class, 'onHumans']);
Routes::get('/security.txt', [SeoController::class, 'onSecurity']);
Routes::get('/browserconfig.xml', [SeoController::class, 'onBrowserconfig']);
