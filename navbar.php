<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nayana Group</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">

    <link rel="canonical" href="https://nayanagroups.com/">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "@id": "https://nayanagroups.com/#business",
            "name": "Nayana Group",
            "url": "https://nayanagroups.com/",
            "telephone": "+91 96888 87888",
            "email": "nayanagroup21@gmail.com",
            "description": "Nayana Group is an architecture and construction company in Kakinada offering architecture, interior design, construction, project management, renovation and landscape design services.",
            "image": "https://nayanagroups.com/",
            "priceRange": "$$",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Cinema Rd, Ramakrishna Rao Peta",
                "addressLocality": "Kakinada",
                "addressRegion": "Andhra Pradesh",
                "postalCode": "533001",
                "addressCountry": "IN"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "addressLocality": "Kakinada",
                "addressRegion": "Andhra Pradesh",
                "addressCountry": "IN"
            },
            "areaServed": {
                "@type": "City",
                "name": "Kakinada"
            },
            "openingHoursSpecification": [{
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday"
                ],
                "opens": "09:00",
                "closes": "20:00"
            }],
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Nayana Group Services",
                "itemListElement": [{
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Architecture",
                            "areaServed": "Kakinada"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Interior Design",
                            "areaServed": "Kakinada"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Construction",
                            "areaServed": "Kakinada"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Project Management",
                            "areaServed": "Kakinada"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Renovation",
                            "areaServed": "Kakinada"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Landscape Design",
                            "areaServed": "Kakinada"
                        }
                    }
                ]
            }
        }
    </script>




    <?php
    // Page lo edaina details ivvakapothe default vi apply avthayi
    $page_title = isset($page_title) ? $page_title : "Nayana Group | Architects & Interior Designers in Kakinada";
    $page_desc  = isset($page_desc)  ? $page_desc  : " Nayana Group is a leading architecture and interior design company in Kakinada offering construction, project management, renovation and landscape design services.  ";
    $page_keys  = isset($page_keys)  ? $page_keys  : " architects in Kakinada, architecture company in Kakinada, interior designers in Kakinada, interior design company Kakinada, construction company Kakinada, project management Kakinada, renovation services Kakinada, landscape design Kakinada, Nayana Group Kakinada, best architects in Kakinada";

    // Auto Detect Canonical URL
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
    $canonical_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
</head>

<body>

    <nav class="navbar navbar-expand-lg index_section_navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./assets/img/logo.png" class="index_section_logo" alt="Logo">
            </a>

            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#index_section_nav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="index_section_nav">
                <ul class="navbar-nav mx-auto">
                    <li><a class="nav-link index_section_nav_link active" href="index.php">INDEX</a></li>
                    <li><a class="nav-link index_section_nav_link" href="about.php">ABOUT US</a></li>
                    <li><a class="nav-link index_section_nav_link" href="projects.php">PROJECTS</a></li>
                    <li><a class="nav-link index_section_nav_link" href="services.php">SERVICES</a></li>
                    <li><a class="nav-link index_section_nav_link" href="gallery.php">GALLERY</a></li>
                    <li><a class="nav-link index_section_nav_link" href="blog.php">BLOGS</a></li>
                    <li><a class="nav-link index_section_nav_link" href="carrer.php">CAREERS</a></li>
                    <!-- <li><a class="nav-link index_section_nav_link" href="contact-us.php">CONTACT</a></li> -->
                </ul>
                <a href="contact-us.php" class="index_section_quote_btn">
                    CONTACT
                </a>
            </div>
        </div>
    </nav>