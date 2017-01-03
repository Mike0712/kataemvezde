@extends('layouts.front.main')

@section('content')
    <!-- Content -->
    <div class="content">
        <div class="ic"></div>
        <div class="container">

            <div class="grid_12">
                <h3 class="h3__head1">Race Calendar</h3>
                <div class="custom-month-year">
                    <div class="dateHolder">
                        <span id="custom-month" class="custom-month">December</span>
                        <span id="custom-year" class="custom-year">2016</span>
                    </div>
                    <nav class="_nav">
                        <span id="custom-prev" class="custom-prev"></span>
                        <span id="custom-next" class="custom-next"></span>
                    </nav>
                </div>
                <div id="calendar" class="fc-calendar-container">
                    <div class="fc-calendar fc-five-rows">
                        <div class="fc-head">
                            <div>Mon</div>
                            <div>Tue</div>
                            <div>Wed</div>
                            <div>Thu</div>
                            <div>Fri</div>
                            <div>Sat</div>
                            <div>Sun</div>
                        </div>
                        <div class="fc-body">
                            <div class="fc-row">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div><span class="fc-date">1</span><span class="fc-weekday">Thu</span></div>
                                <div class="fc-today "><span class="fc-date">2</span><span class="fc-weekday">Fri</span>
                                </div>
                                <div><span class="fc-date">3</span><span class="fc-weekday">Sat</span></div>
                                <div><span class="fc-date">4</span><span class="fc-weekday">Sun</span></div>
                            </div>
                            <div class="fc-row">
                                <div><span class="fc-date">5</span><span class="fc-weekday">Mon</span></div>
                                <div><span class="fc-date">6</span><span class="fc-weekday">Tue</span></div>
                                <div><span class="fc-date">7</span><span class="fc-weekday">Wed</span></div>
                                <div><span class="fc-date">8</span><span class="fc-weekday">Thu</span></div>
                                <div><span class="fc-date">9</span><span class="fc-weekday">Fri</span></div>
                                <div><span class="fc-date">10</span><span class="fc-weekday">Sat</span></div>
                                <div><span class="fc-date">11</span><span class="fc-weekday">Sun</span></div>
                            </div>
                            <div class="fc-row">
                                <div><span class="fc-date">12</span><span class="fc-weekday">Mon</span></div>
                                <div><span class="fc-date">13</span><span class="fc-weekday">Tue</span></div>
                                <div><span class="fc-date">14</span><span class="fc-weekday">Wed</span></div>
                                <div><span class="fc-date">15</span><span class="fc-weekday">Thu</span></div>
                                <div><span class="fc-date">16</span><span class="fc-weekday">Fri</span></div>
                                <div><span class="fc-date">17</span><span class="fc-weekday">Sat</span></div>
                                <div><span class="fc-date">18</span><span class="fc-weekday">Sun</span></div>
                            </div>
                            <div class="fc-row">
                                <div><span class="fc-date">19</span><span class="fc-weekday">Mon</span></div>
                                <div><span class="fc-date">20</span><span class="fc-weekday">Tue</span></div>
                                <div><span class="fc-date">21</span><span class="fc-weekday">Wed</span></div>
                                <div><span class="fc-date">22</span><span class="fc-weekday">Thu</span></div>
                                <div><span class="fc-date">23</span><span class="fc-weekday">Fri</span></div>
                                <div><span class="fc-date">24</span><span class="fc-weekday">Sat</span></div>
                                <div><span class="fc-date">25</span><span class="fc-weekday">Sun</span></div>
                            </div>
                            <div class="fc-row">
                                <div><span class="fc-date">26</span><span class="fc-weekday">Mon</span></div>
                                <div><span class="fc-date">27</span><span class="fc-weekday">Tue</span></div>
                                <div><span class="fc-date">28</span><span class="fc-weekday">Wed</span></div>
                                <div><span class="fc-date">29</span><span class="fc-weekday">Thu</span></div>
                                <div><span class="fc-date">30</span><span class="fc-weekday">Fri</span></div>
                                <div><span class="fc-date">31</span><span class="fc-weekday">Sat</span></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <script type="text/javascript" src="./js/jquery.calendario.js"></script>
    <script type="text/javascript" src="./js/calendar_data.js"></script>
@endsection
