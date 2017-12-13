
        <br><br><br>
        <nav class="recipemenu">
            <ul>
                <li><a class="{{ ((Request::is('meatballs')) ? 'active' : ' ') }}" href="{{ url('meatballs') }}">Meatballs</a></li>
                <li><a class="{{ ((Request::is('pancakes')) ? 'active' : ' ') }}" href="{{ url('pancakes') }}">Pancakes</a></li>
                <li><a>Spagetti</a></li>
                <li><a href="http://www.icecream.com/">Icecream</a></li>
                <li><a>Toast</a></li>
            </ul>
        </nav>

