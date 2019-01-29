
<html>


<body>
            <form action="{{ route('events.store') }}" enctype="multipart/form-data" method="POST">

                @csrf
                <h1> Enter Details to create an event</h1>

                
                    <label>Title</label> <input type="text" id="title" name="title">
                
                    <label>Description</label> <input type="text" name="description">
                
                    <label>Date</label> <input type="date" name="date_event">

                    <label>Recurence</label> <input type="number" name="recurence" title="
                    0 = non-récurent, 
                    1 = journalier, 
                    2 = hebdomadaire, 
                    3 = une fois toute les deux semaines, 
                    4 = mensuel, 
                    5 = tous les deux mois, 
                    6 = trimestriel, 
                    7 = annuel">

                    <input type="hidden" name="id_author" value="{{ auth()->user()->id }}">
                

                <button type="submit">Submit</button>
            </form>

</body>

</html>