<?php

/**
 * Settings Lexicon Entries
 * Sorted by key, alphabetically
 *
 * @package minishop2
 * @subpackage lexicon
 */

$_lang['area_ms2_cart'] = 'Coș';
$_lang['area_ms2_category'] = 'Categoria produselor';
$_lang['area_ms2_frontend'] = 'Site';
$_lang['area_ms2_gallery'] = 'Galerie';
$_lang['area_ms2_main'] = 'Setări de bază';
$_lang['area_ms2_order'] = 'Comenzi';
$_lang['area_ms2_payment'] = 'Metode de plată';
$_lang['area_ms2_product'] = 'Produs';
$_lang['area_ms2_statuses'] = 'Statut';
$_lang['ms2_source_imageNameType_desc'] = 'Acest parametru afișează modul de redenumire a fișierului la încărcare. Hash este generarea unui nume unic, în funcție de conținutul fișierului. Friendly - generarea unui nume prin algoritmul friendly url a paginilor site-ului (acestea sunt controlate de setările de sistem).';
$_lang['ms2_source_maxUploadHeight_desc'] = ' Înălțimea maximă a imaginii pentru încărcare. Cele de dimensiuni mai mari vor fi micșorate la această valoare.';
$_lang['ms2_source_maxUploadSize_desc'] = 'Dimensiunea maximă a imaginilor încărcate (în biți).';
$_lang['ms2_source_maxUploadWidth_desc'] = 'Lățimea maximă a imaginii pentru încărcare. Cele de dimensiuni mai mari vor fi micșorate la această valoare.';
$_lang['ms2_source_thumbnails_desc'] = 'Array codificat în JSON cu parametrii pentru generarea copiilor reduse ale imaginilor.';
$_lang['setting_mgr_tree_icon_mscategory'] = 'Pictograma categoriei';
$_lang['setting_mgr_tree_icon_mscategory_desc'] = 'Pictograma categoriei produselor minIShop2 în arborele resurselor';
$_lang['setting_mgr_tree_icon_msproduct'] = 'Pictograma produsului';
$_lang['setting_mgr_tree_icon_msproduct_desc'] = 'Pictograma produsului minIShop2 în arborele resurselor';
$_lang['setting_ms2_cart_context'] = 'Utilizați un singur coș pentru toate contextele?';
$_lang['setting_ms2_cart_context_desc'] = 'Dacă este activat, atunci este utilizat un coș comun pentru toate contextele. Dacă este oprit, atunci fiecare context folosește propriul coș.';
$_lang['setting_ms2_cart_handler_class'] = 'Clasa de prelucrare a coșului ';
$_lang['setting_ms2_cart_handler_class_desc'] = 'Denumirea clasei, care realizează logica lucrului cu coșul.';
$_lang['setting_ms2_cart_js_class_name'] = 'JS clasa de control al coșului';
$_lang['setting_ms2_cart_js_class_name_desc'] = 'clasa ar trebui să fie exportată implicit';
$_lang['setting_ms2_cart_js_class_path'] = 'Calea către controlul coșului JS';
$_lang['setting_ms2_cart_js_class_path_desc'] = 'Calea este relativă la directorul assets/components/minishop2/js/web/modules';
$_lang['setting_ms2_cart_max_count'] = 'Numărul maxim de articole în coș';
$_lang['setting_ms2_cart_max_count_desc'] = 'Setarea implicită este 1000. În cazul în care această valoare este depășită, se va afișa o notificare. ';
$_lang['setting_ms2_category_content_default'] = 'Conținutul categoriilor în mod implicit';
$_lang['setting_ms2_category_content_default_desc'] = 'Aici puteți specifica conținutul categoriei nou create. Implicit este instalată afișarea produselor subordonate.';
$_lang['setting_ms2_category_grid_fields'] = 'Câmpurile tabelului de produse';
$_lang['setting_ms2_category_grid_fields_desc'] = 'Lista câmpurilor vizibile a tabelului cu produsele categorii, separate prin virgulă.';
$_lang['setting_ms2_category_id_as_alias'] = 'ID categoriei ca alias';
$_lang['setting_ms2_category_id_as_alias_desc'] = 'Dacă este activat, alias-urile pentru denumiri a categoriilor nu se vor genera. În loc de aceasta se vor afișa ID-urile lor.';
$_lang['setting_ms2_category_remember_grid'] = 'Memorizarea tabelului categoriei';
$_lang['setting_ms2_category_remember_grid_desc'] = 'Dacă este activat, starea categoriei se va memoriza și se va restabili la încărcarea paginii, inclusiv numărul paginii și cîmpul de căutare.';
$_lang['setting_ms2_category_remember_tabs'] = 'Memorizarea tab-ului categoriei';
$_lang['setting_ms2_category_remember_tabs_desc'] = 'Dacă este activat, atunci tab-ul activ a panoului categoriei se va memora și se va restabili la încărcarea paginii.';
$_lang['setting_ms2_category_show_comments'] = 'A afișa comentariile categoriei';
$_lang['setting_ms2_category_show_comments_desc'] = 'A afișa comentariile lăsate la toate produsele categoriei, dacă este instalat componentul "Tickets"';
$_lang['setting_ms2_category_show_nested_products'] = 'A afișa produsele subordonate a categoriei';
$_lang['setting_ms2_category_show_nested_products_desc'] = 'Dacă veți activa această opțiune, atunci în categorie vor fi afișate toate produsele subordonate. Ele sunt evidențiate cu altă culoare și ele au denumirea categoriei sale sub pagetitle.';
$_lang['setting_ms2_category_show_options'] = 'A afișa opțiunile produselor categoriei';
$_lang['setting_ms2_category_show_options_desc'] = 'A afișa opțiunile produselor categoriei.';
$_lang['setting_ms2_chunks_categories'] = 'Categorii pentru o listă de chunks';
$_lang['setting_ms2_chunks_categories_desc'] = 'O listă de ID-uri de categorie, separate prin virgulă, pentru o listă de chunks.';
$_lang['setting_ms2_date_format'] = 'Formatul datei';
$_lang['setting_ms2_date_format_desc'] = 'Specificați formatul datelor miniShop2, utilizînd sintaxa php a funcției strftime(). Implicit formatul  "%d.%m.%y %H:%M".';
$_lang['setting_ms2_email_manager'] = 'Email-urile managerilor ';
$_lang['setting_ms2_email_manager_desc'] = 'Lista email-urilor managerilor, separate prin virgulă, la care trebuie de expediat anunțuri despre schimbarea statutului comenzii.';
$_lang['setting_ms2_frontend_css'] = 'Stilurile front-end-ului';
$_lang['setting_ms2_frontend_css_desc'] = 'Calea spre fișier cu stilurile magazinului. Dacă doriți să utilizați stilurile proprii – specificați calea spre ei aici sau ștergeți acest parametru și încărcați-le manual prin șablonul site-ului.';
$_lang['setting_ms2_frontend_js'] = 'Scripturile front-end-ului ';
$_lang['setting_ms2_frontend_js_desc'] = 'Calea spre fișierul cu scripturile magazinului. Dacă doriți să utilizați scripturile proprii- specificați calea spre ele sau ștergeți parametrul și încărcați-le manual prin intermediul șablonului site-ului.';
$_lang['setting_ms2_frontend_message_css'] = 'Stiluri de bibliotecă de notificări';
$_lang['setting_ms2_frontend_message_css_desc'] = 'Calea către fișierul CSS al bibliotecii de notificări. Implicit la jgrowl. <br>Dacă doriți să utilizați propria bibliotecă - specificați aici calea către directorul său css sau ștergeți setarea și încărcați-le manual prin șablonul site-ului.';
$_lang['setting_ms2_frontend_message_js'] = 'Scripturi de bibliotecă de notificări';
$_lang['setting_ms2_frontend_message_js_desc'] = 'Calea către fișierul JS al bibliotecii de notificări. Implicit la jgrowl. <br>Dacă doriți să utilizați propria bibliotecă - specificați calea către directorul său JS aici sau ștergeți setarea și încărcați-le manual prin șablonul site-ului.';
$_lang['setting_ms2_frontend_message_js_settings'] = 'Setări bibliotecă de notificări';
$_lang['setting_ms2_frontend_message_js_settings_desc'] = 'Calea către fișierul cu implementarea șablonului de notificare pe baza bibliotecii dvs. <br>Implicit la setările jgrowl. <br>Dacă doriți să utilizați propria bibliotecă - specificați aici calea către setările acesteia sau ștergeți parametrul și încărcați-le manual prin șablonul site-ului.';
$_lang['setting_ms2_frontend_notify_js_settings'] = 'Setări de notificare pentru noua versiune de scripturi';
$_lang['setting_ms2_frontend_notify_js_settings_desc'] = 'Calea către fișierul de setări. Vă rugăm să rețineți că fișierul trebuie să fie în format JSON';
$_lang['setting_ms2_notify_js_class_name'] = 'Numele clasei JS pentru afișarea notificărilor';
$_lang['setting_ms2_notify_js_class_name_desc'] = 'clasa ar trebui să fie exportată implicit';
$_lang['setting_ms2_notify_js_class_path'] = 'Calea către clasa JS pentru afișarea notificărilor';
$_lang['setting_ms2_notify_js_class_path_desc'] = 'Calea este relativă la directorul assets/components/minishop2/js/web/modules';
$_lang['setting_ms2_order_address_fields'] = 'Cîmpurile adresei livrării';
$_lang['setting_ms2_order_address_fields_desc'] = 'Lista cîmpurilor livrării, care vor fi afișate în al treilea tab a paginii comenzii. Sunt accesibile: "receiver,phone,index,country,region,metro,building,city,street,room". Dacă parametrul este gol, tab-ul va fi ascuns.';
$_lang['setting_ms2_order_format_num'] = 'Formatul de numerotare a comenzii';
$_lang['setting_ms2_order_format_num_desc'] = 'Formatul de numerotare a comenzii. Valori disponibile în format PHP strftime().';
$_lang['setting_ms2_order_format_num_separator'] = 'Separator pentru numerotarea comenzii';
$_lang['setting_ms2_order_format_num_separator_desc'] = 'Separator pentru numerotarea comenzii. Valori disponibile: "/", "," и "-"';
$_lang['setting_ms2_order_grid_fields'] = 'Cîmpurile tabelului comenzilor';
$_lang['setting_ms2_order_grid_fields_desc'] = 'Lista cîmpurilor care vor fi afișate în tabelul comenzilor. Sunt disponibile: "createdon,updatedon,num,cost,cart_cost,delivery_cost,weight,status,delivery,payment,customer,receiver".';
$_lang['setting_ms2_order_handler_class'] = 'Clasa de prelucrare a comenzii';
$_lang['setting_ms2_order_handler_class_desc'] = 'Denumirea clasei, care realizează logica de prelucrare a comenzii.';
$_lang['setting_ms2_order_js_class_name'] = 'Numele clasei JS pentru checkout';
$_lang['setting_ms2_order_js_class_name_desc'] = 'Clasa ar trebui să fie exportată implicit';
$_lang['setting_ms2_order_js_class_path'] = 'Calea către clasa JS pentru checkout';
$_lang['setting_ms2_order_js_class_path_desc'] = 'Calea este relativă la directorul assets/components/minishop2/js/web/modules';
$_lang['setting_ms2_order_product_fields'] = 'Câmpurile tabelului cumpărăturilor';
$_lang['setting_ms2_order_product_fields_desc'] = 'Lista cîmpurilor tabelului produselor comandate. Sunt accesibile: "count,price,weight,cost,options". Cîmpurile produsului sunt afișate cu prefixul  "product_", de exemplu "product_pagetitle,product_article". Suplimentar, puteți specifica valori din câmpul de opțiuni cu prefixul "option_", de exemplu: "option_color,option_size".';
$_lang['setting_ms2_order_product_options'] = 'Câmpurile de opțiuni de produs dintr-o comandă';
$_lang['setting_ms2_order_product_options_desc'] = 'Lista de opțiuni de produs editabile în fereastra de comandă. Culoare implicită, dimensiune';
$_lang['setting_ms2_order_user_groups'] = 'Grupurile de înregistrare a cumpărătorilor';
$_lang['setting_ms2_order_user_groups_desc'] = 'Lista grupurilor, separate prin virgulă, în care doriți să adăugați cumpărători noi la prelucrarea comenzii.';
$_lang['setting_ms2_plugins'] = 'Plugin-urile magazinului';
$_lang['setting_ms2_plugins_desc'] = 'Array cu plugin-urile înregistrate de lărgire a obiectelor modelelor magazinului: produselor, profilurilor cumpărătorului etc.';
$_lang['setting_ms2_price_format'] = 'Formatul prețurilor';
$_lang['setting_ms2_price_format_desc'] = 'Specificați, modul de formare a prețurilor produselor utilizînd funcția number_format(). Se folosește șir JSON cu array pentru transferul a 3 parametri: numărul de zecimale, separatorul zecimal și separatorul de mii. Implicit formatul este [2,"."," "], care transformă "15336.6" în "15 336.60"';
$_lang['setting_ms2_price_format_no_zeros'] = 'A șterge zerourile în plus în prețuri';
$_lang['setting_ms2_price_format_no_zeros_desc'] = 'Dacă această opțiune este activată, zerourile în plus la sfîrșitul prețului se șterg și primiți "15.2".';
$_lang['setting_ms2_price_snippet'] = 'Modificatorul prețului';
$_lang['setting_ms2_price_snippet_desc'] = 'Aici puteți specifica denumirea snippet-ului pentru modificarea prețului la afișarea lui pe site și adăugării în coș. El trebuie să primească obiectul "$ product" și să returneze numărul.';
$_lang['setting_ms2_product_extra_fields'] = 'Câmpuri suplimentare a produsului';
$_lang['setting_ms2_product_extra_fields_desc'] = 'Lista câmpurilor suplimentare ale produselor utilizate în magazin, separate prin virgulă. De exemplu: "price,old_price,weight".';
$_lang['setting_ms2_product_id_as_alias'] = 'ID produsului ca alias';
$_lang['setting_ms2_product_id_as_alias_desc'] = 'Dacă este activat, alias-urile pentru denumiri a categoriilor nu se vor genera. În loc de aceasta se vor afișa ID-urile lor.';
$_lang['setting_ms2_product_main_fields'] = 'Câmpurile de bază ale panoului de produse';
$_lang['setting_ms2_product_main_fields_desc'] = 'Lista câmpurilor panoului produsului, separate prin virgulă. De exemplu: "pagetitle,longtitle,content".';
$_lang['setting_ms2_product_remember_tabs'] = 'Memorizarea tab-ului produsului';
$_lang['setting_ms2_product_remember_tabs_desc'] = 'Dacă este activat, tab-ul activ al panoului produsului se va memoriza și se va restabili la încărcarea paginii.';
$_lang['setting_ms2_product_show_comments'] = 'A afișa comentariile produsului';
$_lang['setting_ms2_product_show_comments_desc'] = 'A afișa comentariile lăsate la produs, dacă este instalat componentul "Tickets"';
$_lang['setting_ms2_product_show_in_tree_default'] = 'A afișa în arbore în mod implicit ';
$_lang['setting_ms2_product_show_in_tree_default_desc'] = 'Activați această opțiune pentru ca toate produsele create să fie vizibile în arborele de resurse.';
$_lang['setting_ms2_product_source_default'] = 'Sursa de fișiere în mod implicit';
$_lang['setting_ms2_product_source_default_desc'] = 'Sursa de fișiere pentru galeria imaginilor produsului implicit.';
$_lang['setting_ms2_product_tab_categories'] = 'Tab-ul categoriilor produsului';
$_lang['setting_ms2_product_tab_categories_desc'] = 'A afișa tab-ul categoriilor produsului?';
$_lang['setting_ms2_product_tab_extra'] = 'Tab-ul proprietăților produsului';
$_lang['setting_ms2_product_tab_extra_desc'] = 'A afișa tab-ul proprietăților produsului?';
$_lang['setting_ms2_product_tab_gallery'] = 'Tab-ul galeriei produsului';
$_lang['setting_ms2_product_tab_gallery_desc'] = 'A afișa tab-ul galeriei produsului?';
$_lang['setting_ms2_product_tab_links'] = 'Tab-ul legăturilor produsului';
$_lang['setting_ms2_product_tab_links_desc'] = 'A afișa tab-ul legăturilor produsului?';
$_lang['setting_ms2_product_tab_options'] = 'Tab-ul opțiunilor produsului';
$_lang['setting_ms2_product_tab_options_desc'] = 'A afișa tab-ul opțiunilor produsului?';
$_lang['setting_ms2_product_vertical_tabs'] = 'Tab-uri verticale pe pagina produsului';
$_lang['setting_ms2_product_vertical_tabs_desc'] = 'Cum de afișat pagina produsului? Dezactivarea acestei opțiuni va permite să potriviți pagina produsului pe ecrane de dimensiuni mici. Nu este recomandat.';
$_lang['setting_ms2_register_frontend'] = 'Adăugați js și css din fișierele MS2 în DOM';
$_lang['setting_ms2_register_frontend_desc'] = 'Permiteți adăugarea de linkuri la fișierele js și css din pachetul ms2 în DOM';
$_lang['setting_ms2_services'] = 'Servicii magazin';
$_lang['setting_ms2_services_desc'] = 'Array cu clase înregistrate pentru coș de cumpărături, comandă, livrare și plată. Se folosește de componente externe pentru încărcarea funcționalului său.';
$_lang['setting_ms2_status_canceled'] = 'ID starea anulării comenzii';
$_lang['setting_ms2_status_canceled_desc'] = 'Ce stare trebuie setat la anularea unei comenzi';
$_lang['setting_ms2_status_draft'] = 'Starea comenzii ID draft';
$_lang['setting_ms2_status_draft_desc'] = 'Ce statut ar trebui stabilit pentru un proiect de ordin';
$_lang['setting_ms2_status_for_stat'] = 'ID-uri de status pentru statistici';
$_lang['setting_ms2_status_for_stat_desc'] = 'Stări, separate prin virgule, pentru a construi statistici ale comenzilor FINALIZATE';
$_lang['setting_ms2_status_new'] = 'ID stare comandă nouă';
$_lang['setting_ms2_status_new_desc'] = 'Ce stare ar trebui setat pentru o nouă comandă';
$_lang['setting_ms2_status_paid'] = 'ID-ul stării comenzii plătite';
$_lang['setting_ms2_status_paid_desc'] = 'Ce statut ar trebui setat după plata comenzii';
$_lang['setting_ms2_template_category_default'] = 'Șablon implicit pentru categoriile noi';
$_lang['setting_ms2_template_category_default_desc'] = 'Selectați șablonul care va fi instalat implicit la crearea categoriei.';
$_lang['setting_ms2_template_product_default'] = 'Șablon implicit pentru produse noi';
$_lang['setting_ms2_template_product_default_desc'] = 'Alegeți șablonul care va fi instalat implicit la crearea produsului.';
$_lang['setting_ms2_tmp_storage'] = 'Depozitare coș și câmpuri temporare de comandă';
$_lang['setting_ms2_tmp_storage_desc'] = 'Specificați <strong>session</strong> pentru a stoca coșul și câmpurile de comandă temporară în sesiune. 
<br>Pentru stocarea în bazei de date, specificați <strong>db</strong>';
$_lang['setting_ms2_toggle_js_type'] = 'Activați noul JavaScript?';
$_lang['setting_ms2_toggle_js_type_desc'] = 'dacă este selectat DA (Yes), vor fi incluse scripturi fără dependență de jQuery, scrise folosind caracteristicile standardului ES6';
$_lang['setting_ms2_use_scheduler'] = 'Utilizați managerul de cozi (queue)';
$_lang['setting_ms2_use_scheduler_desc'] = 'Înainte de utilizare, asigurați-vă că aveți instalată componenta Scheduler';
$_lang['setting_ms2_vanila_js'] = 'Scripturi frontend noi';
$_lang['setting_ms2_vanila_js_desc'] = 'Calea către fișierul de inițializare pentru noile scripturi de magazin. Dacă doriți să specificați proprii parametrii de inițializare - specificați calea către aceștia aici sau ștergeți parametrul și încărcați-i manual prin șablonul site-ului.';
$_lang['setting_ms2_weight_format'] = 'Formatul greutății  ';
$_lang['setting_ms2_weight_format_desc'] = 'Specificați modul de formare a greutății produsului cu funcția number_format(). Se folosește șir JSON cu array pentru transferul a 3 parametri: numărul de zecimale, separatorul zecimal și separatorul de mii. Implicit formatul este [3,"."," "], care transformă "141.3" în "141.300"';
$_lang['setting_ms2_weight_format_no_zeros'] = 'A șterge zerouri în plus în greutate';
$_lang['setting_ms2_weight_format_no_zeros_desc'] = 'Implicit, greutatea produsului se afișează cu trei zecimale: "15.250". Dacă această opțiune este activată, zerourile în plus la sfîrșitul prețului se șterg și primiți "15.25".';
$_lang['setting_ms2_weight_snippet'] = 'Modificatorul greutății';
$_lang['setting_ms2_weight_snippet_desc'] = 'Aici puteți specifica denumirea snippet-ului pentru modificarea greutății produsului la afișarea lui pe site și adăugării în coș. El trebuie să primească obiectul "$product" și să returneze numărul.';