         $credit_monthly = Cradit::where('credit','=','Credit')->whereMonth('created_at',date('m'))
         ->whereYear('created_at',date('Y'))
         ->count();
         
         $debit_monthly = Cradit::where('credit','=','Debit')->whereMonth('created_at',date('m'))
         ->whereYear('created_at',date('Y'))
         ->count();
         
         $all_data_monthly = Cradit::whereMonth('created_at',date('m'))
         ->whereYear('created_at',date('Y'))
         ->count();
