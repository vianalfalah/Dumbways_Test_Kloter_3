program belanja_sederhana;
uses crt;
var
       qty, belanja,harga,diskon,jumlah,bayar:integer;
       grade:string;
begin
        clrscr;
        write('Masukan Grade : ');readln(grade);
        write('Masukan QTY : ');readln(qty);
        
        if(grade='A')then
         begin
          harga:=3000;
          diskon:=500;
          if(qty>=10)then
          begin
          jumlah:=harga*qty - (diskon*qty);
         end;
         end
        else
         if(grade='B')then
          begin
          harga:=3500;
           diskon:=50%*harga;
           if(qty>=5)then
          begin
          jumlah:=harga*qty - (diskon*qty);
         end;
          end
         else
          if(grade='C')then
           begin
            harga:=5000;
            jumlah:=harga*qty;
           end
          else
           jumlah:=0;

        
        
        writeln('Diskon         :Rp.',diskon);
        writeln('---------------------------');
        writeln('Jumlah         :Rp.',jumlah);
        
        writeln('===========================');

        readln;
end.

