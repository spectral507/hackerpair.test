<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NavigationBarTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_locations_link_takes_user_to_locations_index()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('Locations')
                ->assertPathIs('/locations');
        });
    }

    public function test_events_link_takes_user_to_events_index()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('Events')
                ->assertPathIs('/events');
        });
    }

    public function test_about_link_takes_user_to_about_index()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('About')
                ->assertPathIs('/about');
        });
    }

    public function test_about_the_book_link_takes_user_to_about_book()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('About the Book')
                ->assertPathIs('/about/book');
        });
    }

    public function test_contact_us_link_takes_user_to_contact_index()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('Contact us')
                ->assertPathIs('/contact');
        });
    }
}
