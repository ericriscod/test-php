<?php
class Inbox
{
    private $inboxArray =
    [
        '<li>
        <a href="inbox.html?a=view">
            <span class="photo">
                <img src="./assets/img/avatar2.jpg" alt="" />
            </span>
            <span class="subject">
                <span class="from">
                    Lisa Wong
                </span>
                <span class="time">
                    Agora
                </span>
            </span>
            <span class="message">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, amet!
                Impedit, minus?
            </span>
        </a>
    </li>',

        '<li>
        <a href="inbox.html?a=view">
            <span class="photo">
                <img src="./assets/img/avatar3.jpg" alt="" />
            </span>
            <span class="subject">
                <span class="from">
                    Richard Doe
                </span>
                <span class="time">
                    16 mins
                </span>
            </span>
            <span class="message">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius quo magni
                praesentium quia nostrum natus, aut rerum odit tenetur dolores.
            </span>
        </a>
    </li>',

        ' <li>
        <a href="inbox.html?a=view">
            <span class="photo">
                <img src="./assets/img/avatar1.jpg" alt="" />
            </span>
            <span class="subject">
                <span class="from">
                    Bob Nilson
                </span>
                <span class="time">
                    2 hrs
                </span>
            </span>
            <span class="message">
                Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh...
            </span>
        </a>
    </li>',

        ' <li>
        <a href="inbox.html?a=view">
            <span class="photo">
                <img src="./assets/img/avatar2.jpg" alt="" />
            </span>
            <span class="subject">
                <span class="from">
                    Lisa Wong
                </span>
                <span class="time">
                    40 mins
                </span>
            </span>
            <span class="message">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quam
                facilis debitis.
            </span>
        </a>
    </li>',

        '<li>
        <a href="inbox.html?a=view">
            <span class="photo">
                <img src="./assets/img/avatar3.jpg" alt="" />
            </span>
            <span class="subject">
                <span class="from">
                    Richard Doe
                </span>
                <span class="time">
                    46 mins
                </span>
            </span>
            <span class="message">
                Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh...
            </span>
        </a>
    </li>'
    ];

    public function inboxs(): array
    {
        return $this->inboxArray;
    }

    public function total(): int
    {
        return count($this->inboxArray);
    }
}
