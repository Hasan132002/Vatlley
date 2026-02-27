<?php
/**
 * Events Listing Page
 * Displays upcoming and past events with registration options
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

// Page variables
$page_title = 'Events';
$meta_description = 'Join VettlyGlobal at upcoming industry events, webinars, conferences, and workshops. Network with experts and learn about the latest in risk solutions and data intelligence.';
$meta_keywords = 'events, conferences, workshops, industry events, networking, risk management events';

// Sample events data (replace with database queries)
$upcoming_events = [
    [
        'id' => 1,
        'title' => 'Risk Intelligence Summit 2026',
        'date' => '2026-03-15',
        'end_date' => '2026-03-17',
        'time' => '9:00 AM - 5:00 PM EST',
        'location' => 'New York, NY',
        'type' => 'Conference',
        'description' => 'Join industry leaders for three days of insights on risk management, fraud detection, and data intelligence strategies.',
        'image' => 'event-1.jpg',
        'registration_url' => url('contact'),
        'price' => 'Free',
        'capacity' => '500',
        'registered' => '347'
    ],
    [
        'id' => 2,
        'title' => 'Healthcare Data Security Workshop',
        'date' => '2026-04-10',
        'end_date' => '2026-04-10',
        'time' => '2:00 PM - 4:00 PM EST',
        'location' => 'Online',
        'type' => 'Workshop',
        'description' => 'Learn best practices for protecting healthcare data and ensuring HIPAA compliance in the digital age.',
        'image' => 'event-2.jpg',
        'registration_url' => url('contact'),
        'price' => 'Free',
        'capacity' => '200',
        'registered' => '156'
    ],
    [
        'id' => 3,
        'title' => 'Financial Services Compliance Forum',
        'date' => '2026-05-20',
        'end_date' => '2026-05-20',
        'time' => '10:00 AM - 12:00 PM EST',
        'location' => 'Chicago, IL',
        'type' => 'Forum',
        'description' => 'Explore the latest regulatory changes and compliance strategies for financial institutions.',
        'image' => 'event-3.jpg',
        'registration_url' => url('contact'),
        'price' => 'Free',
        'capacity' => '150',
        'registered' => '89'
    ],
    [
        'id' => 4,
        'title' => 'AI & Machine Learning in Fraud Detection',
        'date' => '2026-06-05',
        'end_date' => '2026-06-05',
        'time' => '1:00 PM - 3:00 PM EST',
        'location' => 'Online',
        'type' => 'Webinar',
        'description' => 'Discover how artificial intelligence and machine learning are revolutionizing fraud detection and prevention.',
        'image' => 'event-4.jpg',
        'registration_url' => url('contact'),
        'price' => 'Free',
        'capacity' => '300',
        'registered' => '234'
    ]
];

$past_events = [
    [
        'id' => 5,
        'title' => 'Data Privacy & GDPR Compliance Conference',
        'date' => '2026-01-20',
        'end_date' => '2026-01-22',
        'location' => 'Boston, MA',
        'type' => 'Conference',
        'description' => 'A comprehensive look at data privacy regulations and compliance strategies across industries.',
        'attendees' => '450',
        'recording_url' => '#recording'
    ],
    [
        'id' => 6,
        'title' => 'Insurance Analytics Workshop',
        'date' => '2025-12-10',
        'end_date' => '2025-12-10',
        'location' => 'Online',
        'type' => 'Workshop',
        'description' => 'Learn how to leverage data analytics for better underwriting and claims management.',
        'attendees' => '178',
        'recording_url' => '#recording'
    ],
    [
        'id' => 7,
        'title' => 'Identity Verification Trends 2025',
        'date' => '2025-11-15',
        'end_date' => '2025-11-15',
        'location' => 'San Francisco, CA',
        'type' => 'Summit',
        'description' => 'Explore the latest trends and technologies in digital identity verification.',
        'attendees' => '320',
        'recording_url' => '#recording'
    ]
];

include '../../includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <nav class="breadcrumb">
            <a href="<?php echo url(''); ?>">Home</a>
            <span>/</span>
            <span>Events</span>
        </nav>
        <h1>Events & Conferences</h1>
        <p>Connect with industry experts and stay informed about the latest trends in risk management and data intelligence</p>
    </div>
</section>

<!-- Event Filters -->
<section class="events-filters">
    <div class="container">
        <div class="filter-bar">
            <div class="filter-group">
                <select class="filter-select" id="eventType">
                    <option value="">All Event Types</option>
                    <option value="conference">Conference</option>
                    <option value="workshop">Workshop</option>
                    <option value="webinar">Webinar</option>
                    <option value="forum">Forum</option>
                    <option value="summit">Summit</option>
                </select>
            </div>
            <div class="filter-group">
                <select class="filter-select" id="eventLocation">
                    <option value="">All Locations</option>
                    <option value="online">Online</option>
                    <option value="new-york">New York, NY</option>
                    <option value="chicago">Chicago, IL</option>
                    <option value="san-francisco">San Francisco, CA</option>
                    <option value="boston">Boston, MA</option>
                </select>
            </div>
            <div class="filter-group">
                <input type="text" class="filter-search" placeholder="Search events..." id="eventSearch">
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Events -->
<section class="events-section section">
    <div class="container">
        <div class="section-header">
            <h2><i class="fas fa-calendar-check"></i> Upcoming Events</h2>
            <p>Get in touch to learn more about these exclusive events</p>
        </div>

        <div class="events-grid" id="events-grid">
            <?php foreach ($upcoming_events as $event): ?>
                <article class="event-card"
                         data-type="<?php echo strtolower($event['type']); ?>"
                         data-location="<?php echo strtolower(str_replace([' ', ','], ['-', ''], $event['location'])); ?>">
                    <div class="event-card-header">
                        <span class="event-type event-type-<?php echo strtolower($event['type']); ?>">
                            <?php echo $event['type']; ?>
                        </span>
                        <div class="event-date-badge">
                            <div class="date-month"><?php echo date('M', strtotime($event['date'])); ?></div>
                            <div class="date-day"><?php echo date('d', strtotime($event['date'])); ?></div>
                        </div>
                    </div>

                    <div class="event-card-body">
                        <h3 class="event-title"><?php echo $event['title']; ?></h3>

                        <div class="event-meta">
                            <div class="event-meta-item">
                                <i class="fas fa-calendar-alt"></i>
                                <span><?php echo date('F j, Y', strtotime($event['date'])); ?></span>
                            </div>
                            <div class="event-meta-item">
                                <i class="fas fa-clock"></i>
                                <span><?php echo $event['time']; ?></span>
                            </div>
                            <div class="event-meta-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span><?php echo $event['location']; ?></span>
                            </div>
                        </div>

                        <p class="event-description"><?php echo $event['description']; ?></p>

                        <div class="event-stats">
                            <div class="event-stat">
                                <i class="fas fa-ticket-alt"></i>
                                <span><?php echo $event['price']; ?></span>
                            </div>
                            <div class="event-stat">
                                <i class="fas fa-users"></i>
                                <span><?php echo $event['registered']; ?>/<?php echo $event['capacity']; ?> registered</span>
                            </div>
                        </div>

                        <div class="event-progress">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: <?php echo ($event['registered'] / $event['capacity'] * 100); ?>%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="event-card-footer">
                        <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-block">
                            <i class="fas fa-envelope"></i>
                            Contact Us
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="no-results" id="no-results" style="display: none;">
            <i class="fas fa-calendar-times"></i>
            <h3>No events found</h3>
            <p>Try adjusting your filters to find events.</p>
        </div>
    </div>
</section>

<!-- Calendar View Toggle (Optional) -->
<section class="calendar-section section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center">
            <h2><i class="fas fa-calendar"></i> Event Calendar</h2>
            <p>View all events at a glance</p>
        </div>

        <div class="calendar-notice">
            <i class="fas fa-info-circle"></i>
            <p>Full calendar view coming soon. For now, browse our upcoming and past events above.</p>
        </div>
    </div>
</section>

<!-- Past Events -->
<section class="past-events-section section">
    <div class="container">
        <div class="section-header">
            <h2><i class="fas fa-history"></i> Past Events</h2>
            <p>A look back at our previously conducted events</p>
        </div>

        <div class="past-events-list" id="past-events-list">
            <?php foreach ($past_events as $event): ?>
                <div class="past-event-card"
                     data-type="<?php echo strtolower($event['type']); ?>"
                     data-location="<?php echo strtolower(str_replace([' ', ','], ['-', ''], $event['location'])); ?>">
                    <div class="past-event-left">
                        <div class="past-event-date">
                            <span class="past-date-month"><?php echo date('M', strtotime($event['date'])); ?></span>
                            <span class="past-date-day"><?php echo date('d', strtotime($event['date'])); ?></span>
                            <span class="past-date-year"><?php echo date('Y', strtotime($event['date'])); ?></span>
                        </div>
                    </div>

                    <div class="past-event-center">
                        <span class="event-type event-type-<?php echo strtolower($event['type']); ?>">
                            <?php echo $event['type']; ?>
                        </span>
                        <h3><?php echo $event['title']; ?></h3>
                        <div class="past-event-meta">
                            <span><i class="fas fa-map-marker-alt"></i> <?php echo $event['location']; ?></span>
                            <span><i class="fas fa-users"></i> <?php echo $event['attendees']; ?> attendees</span>
                        </div>
                        <p><?php echo $event['description']; ?></p>
                    </div>

                    <div class="past-event-right">
                        <a href="<?php echo url('contact'); ?>" class="btn btn-outline">
                            <i class="fas fa-envelope"></i>
                            Contact Us
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Newsletter CTA -->
<section class="events-cta section">
    <div class="container">
        <div class="cta-content text-center">
            <i class="fas fa-bell" style="font-size: 3rem; color: white; margin-bottom: 20px;"></i>
            <h2 style="color: white;">Never Miss an Event</h2>
            <p style="color: rgba(255,255,255,0.95);">Subscribe to our newsletter to receive updates about upcoming events, webinars, and exclusive opportunities.</p>
            <form class="newsletter-form-inline" method="POST" action="<?php echo url('resources/blog/newsletter-subscribe'); ?>" data-validate>
                <?php echo csrf_field(); ?>
                <input type="hidden" name="redirect_url" value="<?php echo current_url(); ?>">
                <input type="email" name="email" placeholder="Enter your email address" required>
                <button type="submit" class="btn btn-secondary">
                    <i class="fas fa-envelope"></i>
                    Subscribe
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Contact CTA -->
<section class="section">
    <div class="container">
        <div class="contact-cta-box">
            <div class="contact-cta-content">
                <h2>Want to Host an Event with Us?</h2>
                <p>Partner with VettlyGlobal to host industry-leading events and reach our global network of professionals.</p>
            </div>
            <div class="contact-cta-action">
                <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-lg">
                    <i class="fas fa-handshake"></i>
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* Page Header */
.page-header {
    background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat;
    color: white;
    padding: 80px 0 60px;
}
.events-cta {
      padding: 80px 0;
    background: url('<?php echo ASSETS_URL; ?>/images/get-started.jpg') center center / cover no-repeat;
    color: white;
    text-align: center;
    position: relative;
    overflow: hidden;
    background-attachment:fixed;
}
section.events-cta::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: var(--primary-dark);
    opacity: 0.6;
}
.cta-content.text-center {
    position: relative;
    z-index: 2;
}
.page-header h1 {
    color: white;
    font-size: 3rem;
    margin-bottom: 15px;
}

.page-header p {
    color: rgba(255,255,255,0.95);
    font-size: 1.2rem;
}

.breadcrumb {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 20px;
    font-size: 0.95rem;
    color: rgba(255,255,255,0.9);
}

.breadcrumb a {
    color: white;
    transition: var(--transition);
}

.breadcrumb a:hover {
    color: rgba(255,255,255,0.8);
}

/* Event Filters */
.events-filters {
    background: var(--bg-white);
    padding: 30px 0;
    box-shadow: var(--shadow-sm);
    position: sticky;
    top: 80px;
    z-index: 100;
}

.filter-bar {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    align-items: center;
}

.filter-group {
    flex: 1;
    min-width: 200px;
}

.filter-select,
.filter-search {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid var(--border-color);
    border-radius: 8px;
    font-size: 0.95rem;
    transition: var(--transition);
}

.filter-select:focus,
.filter-search:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(5, 130, 189, 0.1);
}

/* Events Grid */
.events-section {
    background: var(--bg-lighter);
}

.section-header {
    text-align: center;
    margin-bottom: 50px;
}

.section-header h2 {
    font-size: 2.5rem;
    margin-bottom: 15px;
}

.section-header h2 i {
    color: var(--primary-color);
    margin-right: 10px;
}

.section-header p {
    font-size: 1.15rem;
    color: var(--text-secondary);
}

.events-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
}

.event-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
    display: flex;
    flex-direction: column;
}

.event-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}

.event-card-header {
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    background: var(--bg-light);
}

.event-type {
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    text-transform: uppercase;
}

.event-type-conference { background: #E3F2FD; color: #1976D2; }
.event-type-workshop { background: #F3E5F5; color: #7B1FA2; }
.event-type-webinar { background: #E8F5E9; color: #388E3C; }
.event-type-forum { background: #FFF3E0; color: #F57C00; }
.event-type-summit { background: #FCE4EC; color: #C2185B; }

.event-date-badge {
    background: var(--primary-color);
    color: white;
    padding: 10px 15px;
    border-radius: 8px;
    text-align: center;
    min-width: 70px;
}

.date-month {
    font-size: 0.9rem;
    font-weight: 600;
    text-transform: uppercase;
}

.date-day {
    font-size: 1.8rem;
    font-weight: 700;
    line-height: 1;
}

.event-card-body {
    padding: 25px;
    flex: 1;
}

.event-title {
    font-size: 1.4rem;
    margin-bottom: 20px;
    color: var(--text-primary);
}

.event-meta {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-bottom: 15px;
}

.event-meta-item {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 0.95rem;
    color: var(--text-secondary);
}

.event-meta-item i {
    color: var(--primary-color);
    width: 20px;
}

.event-description {
    color: var(--text-secondary);
    line-height: 1.6;
    margin-bottom: 20px;
}

.event-stats {
    display: flex;
    justify-content: space-between;
    margin-bottom: 15px;
    padding-top: 15px;
    border-top: 1px solid var(--border-light);
}

.event-stat {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.9rem;
    color: var(--text-secondary);
}

.event-stat i {
    color: var(--secondary-color);
}

.event-progress {
    margin-bottom: 20px;
}

.progress-bar {
    height: 8px;
    background: var(--bg-light);
    border-radius: 10px;
    overflow: hidden;
}

.progress-fill {
    height: 100%;
    background: linear-gradient(90deg, var(--secondary-color), var(--secondary-light));
    transition: width 0.5s ease;
}

.event-card-footer {
    padding: 0 25px 25px;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.btn-block {
    width: 100%;
    justify-content: center;
}

/* Calendar Section */
.calendar-notice {
    background: white;
    padding: 40px;
    border-radius: 12px;
    text-align: center;
    box-shadow: var(--shadow-md);
}

.calendar-notice i {
    font-size: 3rem;
    color: var(--primary-color);
    margin-bottom: 20px;
}

.calendar-notice p {
    font-size: 1.1rem;
    margin: 0;
}

/* Past Events */
.past-events-list {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.past-event-card {
    background: white;
    border-radius: 12px;
    padding: 30px;
    box-shadow: var(--shadow-md);
    display: grid;
    grid-template-columns: auto 1fr auto;
    gap: 30px;
    align-items: center;
    transition: var(--transition);
}

.past-event-card:hover {
    box-shadow: var(--shadow-lg);
}

.past-event-date {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 15px 20px;
    background: var(--bg-light);
    border-radius: 8px;
    min-width: 80px;
}

.past-date-month {
    font-size: 0.9rem;
    font-weight: 600;
    color: var(--primary-color);
    text-transform: uppercase;
}

.past-date-day {
    font-size: 2rem;
    font-weight: 700;
    color: var(--text-primary);
    line-height: 1;
}

.past-date-year {
    font-size: 0.85rem;
    color: var(--text-secondary);
}

.past-event-center h3 {
    font-size: 1.3rem;
    margin-bottom: 10px;
    margin-top: 10px;
}

.past-event-meta {
    display: flex;
    gap: 20px;
    margin-bottom: 10px;
    font-size: 0.9rem;
    color: var(--text-secondary);
}

.past-event-meta i {
    margin-right: 5px;
}

.past-event-center p {
    color: var(--text-secondary);
    margin-bottom: 0;
}

/* Newsletter Form */
.newsletter-form-inline {
    display: flex;
    gap: 15px;
    max-width: 600px;
    margin: 30px auto 0;
}

.newsletter-form-inline input {
    flex: 1;
    padding: 15px 20px;
    border: 2px solid rgba(255,255,255,0.3);
    border-radius: 8px;
    background: rgba(255,255,255,0.1);
    color: white;
    font-size: 1rem;
}

.newsletter-form-inline input::placeholder {
    color: rgba(255,255,255,0.7);
}

.newsletter-form-inline button {
    padding: 15px 30px;
    white-space: nowrap;
}

/* Contact CTA */
.no-results {
    text-align: center;
    padding: 60px 20px;
    background: white;
    border-radius: 12px;
    margin-top: 30px;
}

.no-results i {
    font-size: 3rem;
    color: var(--text-light);
    margin-bottom: 15px;
}

.no-results h3 {
    margin-bottom: 10px;
}

.no-results p {
    color: var(--text-secondary);
}

.contact-cta-box {
    background: white;
    border-radius: 12px;
    padding: 30px;
    box-shadow: var(--shadow-md);
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 40px;
}

.contact-cta-content h2 {
    margin-bottom: 10px;
}

.contact-cta-content p {
    margin: 0;
    font-size: 1.1rem;
}

/* Responsive */
@media (max-width: 992px) {
    .events-grid {
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    }

    .past-event-card {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .past-event-date {
        margin: 0 auto;
    }

    .past-event-meta {
        justify-content: center;
    }

    .past-event-right {
        display: flex;
        justify-content: center;
    }
}

@media (max-width: 768px) {
    .page-header h1 {
        font-size: 2.2rem;
    }

    .events-grid {
        grid-template-columns: 1fr;
    }

    .filter-bar {
        flex-direction: column;
    }

    .filter-group {
        width: 100%;
    }

    .newsletter-form-inline {
        flex-direction: column;
    }

    .newsletter-form-inline button {
        width: 100%;
    }

    .contact-cta-box {
        flex-direction: column;
        text-align: center;
        padding: 30px;
    }
}
</style>

<script>
// Events Filtering
document.addEventListener('DOMContentLoaded', function() {
    const typeFilter = document.getElementById('eventType');
    const locationFilter = document.getElementById('eventLocation');
    const searchInput = document.getElementById('eventSearch');
    const upcomingCards = document.querySelectorAll('.event-card');
    const pastCards = document.querySelectorAll('.past-event-card');
    const noResults = document.getElementById('no-results');

    function filterEvents() {
        const type = typeFilter.value;
        const location = locationFilter.value;
        const search = searchInput.value.toLowerCase();
        let visibleCount = 0;

        upcomingCards.forEach(card => {
            const cardType = card.getAttribute('data-type');
            const cardLocation = card.getAttribute('data-location');
            const cardText = card.textContent.toLowerCase();

            const matchesType = !type || cardType === type;
            const matchesLocation = !location || cardLocation.includes(location);
            const matchesSearch = !search || cardText.includes(search);

            if (matchesType && matchesLocation && matchesSearch) {
                card.style.display = 'flex';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        pastCards.forEach(card => {
            const cardType = card.getAttribute('data-type');
            const cardLocation = card.getAttribute('data-location');
            const cardText = card.textContent.toLowerCase();

            const matchesType = !type || cardType === type;
            const matchesLocation = !location || cardLocation.includes(location);
            const matchesSearch = !search || cardText.includes(search);

            if (matchesType && matchesLocation && matchesSearch) {
                card.style.display = 'flex';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        noResults.style.display = visibleCount === 0 ? 'block' : 'none';
    }

    typeFilter.addEventListener('change', filterEvents);
    locationFilter.addEventListener('change', filterEvents);
    searchInput.addEventListener('input', filterEvents);
});
</script>

<?php include '../../includes/footer.php'; ?>
