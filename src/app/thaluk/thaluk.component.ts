import { Component, OnInit } from '@angular/core';
import { DialogComponent } from '../dialog/dialog.component';
import { MatDialog, MatDialogConfig } from '@angular/material/dialog';
import { Router } from '@angular/router';
import {ServerDataService} from "../server-data.service";

@Component({
  selector: 'app-thaluk',
  templateUrl: './thaluk.component.html',
  styleUrls: ['./thaluk.component.css']
})
export class ThalukComponent implements OnInit {
   result: any;


  constructor(private dialog: MatDialog,
          private data:ServerDataService,
              private router: Router) {
  }
  dataSource: any;
  displayedColumns:string[]= ['id','thalukname','thalukcode','action'];

  ngOnInit(): void {
    this.table_content();
  }

  dialogOpen() {
    let dia_ref = new MatDialogConfig()
    dia_ref.width = "25%";
    dia_ref.data={
      action:"open"
    }

    let new_dialog = this.dialog.open(DialogComponent,dia_ref);
      new_dialog.afterClosed().subscribe(res =>{
        this.result = res;
        if(this.result == "done"){
          this.table_content();
        }

      })

  }

  dialogEdit(val){
    let dia_ref = new MatDialogConfig()
    dia_ref.width = "25%";
    dia_ref.data={
      action:"edit"
    }
let dialog2 = this.dialog.open(DialogComponent,dia_ref);
    dialog2.afterClosed().subscribe(res3 =>{
      this.result = res3;
      // if (this.result == "done"){
      //
      // }
    })
  }

table_content() {
    this.data.table_fun(this.result).subscribe(res1 =>{
      this.dataSource= res1;
    })
  }
}
