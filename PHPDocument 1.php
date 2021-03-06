RewriteEngine On

# Error Pages
ErrorDocument 401 /not-found.html
ErrorDocument 403 /not-found.html
ErrorDocument 404 /not-found.html
ErrorDocument 500 /not-found.html

# Prevent directory browsing
Options -Indexes +FollowSymLinks -MultiViews

# Canonical host
RewriteCond %{HTTP_HOST}    ^www\.(.*)      [NC]
RewriteRule ^(.*)$          http://%1/$1    [L,R,NE]

#Needed
RewriteRule ^sitemap.xml$ sitemap.xml

RewriteRule ^$ /index.php?lang=
RewriteRule ^es/$ /index.php?lang=es

# English
RewriteRule ^overview/$ 							/overview.php
RewriteRule ^the-rooms/$ 							/the-rooms.php
RewriteRule ^living-spaces/$ 						/living-spaces.php
RewriteRule ^pool-and-outdoor/$ 					/pool-and-outdoor.php
RewriteRule ^what-to-do/$ 							/what-to-do.php
RewriteRule ^staff-and-services/$ 					/staff-and-services.php
RewriteRule ^included/$ 							/included.php
RewriteRule ^at-extra-cost/$ 						/at-an-extra-cost.php
RewriteRule ^riviera-maya/$ 						/riviera-maya.php
RewriteRule ^out-and-about/$ 						/out-and-about.php
RewriteRule ^events-corporate-retreats/$ 			/events-corporate-retreats.php
RewriteRule ^events-family-friends-reunion/$ 		/events-family-friends-reunion.php
RewriteRule ^events-photo-shoots/$ 					/events-photo-shoots.php
RewriteRule ^events-private-events/$ 				/events-private-events.php
RewriteRule ^events-weddings/$ 						/events-weddings.php
RewriteRule ^events/$ 								/events.php
RewriteRule ^contact-us/$ 							/contact-us.php
RewriteRule ^faq/$ 									/faq.php
RewriteRule ^testimonials/$ 						/testimonials.php
RewriteRule ^villa-rules-and-policies/$ 			/villa-rules-and-policies.php
RewriteRule ^packages/$ 							/packages.php
RewriteRule ^gallery/$ 								/gallery.php

RewriteRule ^reservation-rental-rates-and-process/$ 			/reservation-rental-rates-and-process.php
RewriteRule ^out-and-about-dining-culture-shopping/$ 			/out-and-about-dining-culture-shopping.php
RewriteRule ^arriving-to-the-villa-playacar-playa-del-carmen/$ 	/arriving-to-the-villa-playacar-playa-del-carmen.php


# Espagnol
RewriteRule ^es/overview/$ 							/overview.php?lang=es
RewriteRule ^es/las-habitaciones/$ 					/the-rooms.php?lang=es
RewriteRule ^es/areas-comunes/$ 					/living-spaces.php?lang=es
RewriteRule ^es/piscina-y-exteriores/$				/pool-and-outdoor.php?lang=es
RewriteRule ^es/que-hacer-en-la-villa/$				/what-to-do.php?lang=es
RewriteRule ^es/servicios-y-staff/$ 				/staff-and-services.php?lang=es
RewriteRule ^es/incluidos/$ 						/included.php?lang=es
RewriteRule ^es/con-costo-extra/$ 					/at-an-extra-cost.php?lang=es
RewriteRule ^es/riviera-maya/$ 						/riviera-maya.php?lang=es
RewriteRule ^es/out-and-about/$ 					/out-and-about.php?lang=es
RewriteRule ^es/retiros-corporativos/$ 				/events-corporate-retreats.php?lang=es
RewriteRule ^es/reuniones-de-familia-y-amigos/$		/events-family-friends-reunion.php?lang=es
RewriteRule ^es/locacion/$ 							/events-photo-shoots.php?lang=es
RewriteRule ^es/eventos-privados/$ 					/events-private-events.php?lang=es
RewriteRule ^es/bodas/$ 							/events-weddings.php?lang=es
RewriteRule ^es/eventos/$ 							/events.php?lang=es
RewriteRule ^es/contacto/$ 							/contact-us.php?lang=es
RewriteRule ^es/faq/$								/faq.php?lang=es
RewriteRule ^es/info-del-destino/$ 					/arriving-to-the-villa-playacar-playa-del-carmen.php?lang=es
RewriteRule ^es/cultura/$ 							/out-and-about-dining-culture-shopping.php?lang=es
RewriteRule ^es/proceso-de-reserva/$ 				/reservation-rental-rates-and-process.php?lang=es


