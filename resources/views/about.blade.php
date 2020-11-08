@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">

        <p>During a dance competition, each judge evaluates the performances according to three criteria, using a score from 1 to 10. Each dancer has a table with the scores received by each judge. In the rules of the competition there is a condition to cancel the grades of the judge / judges who gave / and the highest / lowest grades for two or more of the criteria.</p>
        <p>Example. A judge gives the lowest grade for musicality and the highest grade for technique - all three grades of this judge will not participate in the final grade of the dancer. The sum of the scores for each criterion is divided by their number. For the final evaluation of the dancer, the final results are summed up by criteria.</p>
        <p>The application you are developing contains an administrative, judicial and user part.</p>
        
        <div class="container">
            <p class="font-weight-bold">Admin</p>
            <ul class="list-group">
                <li class="list-group-item">Registers judges and gives them access data.</li>
                <li class="list-group-item">Adds data about the competitors and processes their final results.</li>
                <li class="list-group-item">Checks which of the competitors withdraw.</li> 
            </ul>
        </div>
        
        <p>Only judges have access to the score page.</p>
        <p>In the user part you can see information about the competition, the competitors and the published rankings.</p>
        <p>The results are processed after all judges have filled in the tables with the scores for all competitors who appeared in the competition. After processing, A publishes the results.</p>
        <p>The results are published in the form of a table with the name of the competitor and his result, arranged by result in descending order. At the end of the table in alphabetical order / ascending / are listed the competitors who refused to participate.</p>
        <p>Examples of processing results</p>
        <p>For the following entered results</p>
        
        <table class="table table-dark">
            <tr>
                <th scope="col">arbiter_id</th>
                <th scope="col">first_criterion</th>
                <th scope="col">second_criterion</th>
                <th scope="col">third_criterion</th>
            </tr>
            <tr>
                <th scope="col">1</th>
                <td>3</td>
                <td>10</td>
                <td>10</td>
            </tr>
            <tr>
                <th scope="col">2</th>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr>
                <th scope="col">3</th>
                <td>5</td>
                <td>6</td>
                <td>7</td>
            </tr>
            <tr>
                <th scope="col">4</th>
                <td>2</td>
                <td>5</td>
                <td>9</td>
            </tr>
            <tr>
                <th scope="col">5</th>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
        </table>
        <p>After the cancellation of the marks of the judge who gave the lowest and / or highest marks for two or more criteria, the table with the results of the competitor will look like this</p>
        <table class="table table-dark">
            <tr>
                <th scope="col">arbiter_id</th>
                <th scope="col">first_criterion</th>
                <th scope="col">second_criterion</th>
                <th scope="col">third_criterion</th>
            </tr>                            
            <tr>
                <th scope="col">2</th>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr>
                <th scope="col">3</th>
                <td>5</td>
                <td>6</td>
                <td>7</td>
            </tr>
            <tr>
                <th scope="col">4</th>
                <td>2</td>
                <td>5</td>
                <td>9</td>
            </tr>
        </table>
        <p>The first judge gave the highest score for two of the criteria. The fifth gave the lowest marks for all three criteria. The marks of both judges are not included in the final result of the competitor.</p>
        <p>Each judge sees a table with a list of competitors - his names and which country they represent. In this table he fills in estimates for his performance.</p>
        <p>The administrator sees a list of the names of the competitors and which country they represent. For each competitor there is a link to his table with the results filled in by all judges. Each such table must be processed / individually or all together, you decide / by the administrator. After processing, the administrator publishes the results of the competitors. </p>
        <p>Users see the total result of the competitor.</p>
        <p>The administrator sees the detailed table for each competitor in which they have been removed / crossed out - you choose the appropriate format for presenting the processed results table.</p>

    </div>
</div>
@endsection
