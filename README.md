![Loopless Micro App Framework](.github/loopless-cover.png)

## Loopless
**A minimal PHP framework for developing front-end web applications.** Loopless main scope is to be an API addicted and stay wired to your whatever backend apps (one or more), but it can be also used as a static & standalone app (see WikiPeep project).

Out of the box, Loopless comes with a MVC structure (without a database setup), a simple Router with dependency injection support, Response & Request handler, a Configuration Array in Laravel style and that's it! Ah, and of course comes with GuzzleHttp Support so in case you get it via composer you can make API connections easily.

It is highly recommended for creating front-end apps, small to medium websites.<br>
Fully Object Oriented, with Composer support - all you need is creativity. 🤪


### Roadmap
- [x] SVG Icon renderer via XML with Dessert Library
- [x] Make Github Template with the Application structure
- [x] Separate Application from Loopless Core
- [x] Response / Request handler based on Symfony Http Foundation
- [x] Session Storage via Symfony Http Foundation
- [x] Simple Router (based on Bramus Router) with some modifications so it can resolve Depdendency Injections.
- [x] Theme support
- [x] Coding HTML from PHP with Emmet syntax to keep things minimal
- [ ] Guzzle Client Support
- [ ] Add personal projects made with Loopless (almost there)

### Projects made w/ Loopless
If you made something cool with Loopless, let me know by creating an issue and I will put it here!

#### [WikiPeep](https://georgelemon.com/projects/wikipeep/) - An Open Source Wiki for Busy Devs. <kbd>WIP</kbd>
Powered by Loopless, Symfony Console, Markdown and JSON. Using WikiPeep you can create modern wiki documentation without dealing with databases. [Github Repository](https://github.com/georgelemon/wikipeep) <code>GPLv3</code>

#### [Kampánia](https://georgelemon.com/projects/kampania) - Your Mailchimp Campaign builder Assistant. <kbd>WIP</kbd>
Originally made for a private luxury villa rentals company. The main task was to give to non technical people the chance to run Mailchimp campaigns without touching the code.

**Kampánia is not a drag and drop builder**,  instead, requires a front-end developer / designer to create  premade templates based on <code>MJML</code> & <code>Placeholders</code>, and make them available in Kampánia Stacks so marketing teams can do their job without worrying they screw up with something 😂 [Github Repository](https://github.com/georgelemon/kampania) <code>AGPL</code>
