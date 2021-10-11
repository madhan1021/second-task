import { Injectable } from '@angular/core';
import {environment} from '../environments/environment';
import { HttpClient, HttpHeaders, HttpParams } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ServerDataService {
  private http = new HttpHeaders().set("Content-Type","appliction/json").set("Accept","appliction/json");
  constructor(private Http: HttpClient) { }

  table_fun(data:any){
    return this.Http.post(
      environment.apiUrl,
      data,
      {headers:this.http,params:new HttpParams().set("new_table","true")}
    )
  }

  thal_name(data: any) {
    return this.Http.post(
      environment.apiUrl,
      data,
      {headers:this.http, params:new HttpParams().set("thal","true")}
    )
  }
}
