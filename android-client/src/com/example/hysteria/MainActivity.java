package com.example.hysteria;

import com.example.services.CommunicationService;
import com.example.services.CommunicationType;

import android.app.Activity;
import android.content.BroadcastReceiver;
import android.content.Context;
import android.content.Intent;
import android.content.IntentFilter;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.ImageButton;
import android.widget.Toast;

public class MainActivity extends Activity implements OnClickListener {

	ResponseReceiver responseReceiver;
	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		
		ImageButton imgBtn = (ImageButton)findViewById(R.id.imgBtnNewRequest);
		imgBtn.setOnClickListener(this);
		
		imgBtn = (ImageButton)findViewById(R.id.imgBtnShowRequests);
		imgBtn.setOnClickListener(this);
		
		imgBtn = (ImageButton)findViewById(R.id.imgBtnShowSchoolarships);
		imgBtn.setOnClickListener(this);
		
		imgBtn = (ImageButton)findViewById(R.id.imgBtnShowInternships);
		imgBtn.setOnClickListener(this);
		
		Button btn = (Button)findViewById(R.id.btnNewRequest);
		btn.setOnClickListener(this);
		
		btn = (Button)findViewById(R.id.btnShowRequests);
		btn.setOnClickListener(this);
		
		btn = (Button)findViewById(R.id.btnShowSchoolarships);
		btn.setOnClickListener(this);
		
		btn = (Button)findViewById(R.id.btnShowInternships);
		btn.setOnClickListener(this);
	}

	@Override
	public void onClick(View v) {
		
		switch(v.getId())
		{
			case R.id.imgBtnNewRequest:
			{
				Toast.makeText(getApplicationContext(), "Slanje zahteva studentskoj sluzbi radi izdavanja potvrda, uverenja, transkripta ocena i slicnih dokumenata", Toast.LENGTH_LONG).show();
				break;
			}
			case R.id.btnNewRequest:
			{
				Intent newRequest = new Intent(this, MakeRequestActivity.class);
				startActivity(newRequest);
				
				break;
			}
			case R.id.imgBtnShowRequests:
			{
				Toast.makeText(getApplicationContext(), "Pregled svih upucenih zahteva studentskoj sluzbi", Toast.LENGTH_LONG).show();
				break;
			}
			case R.id.btnShowRequests:
			{
				Intent service = new Intent(this, CommunicationService.class);
				
				service.putExtra("requestType", CommunicationType.ALL_REQUESTS);
				
				service.putExtra("username", "13638");
				startService(service);
				
				break;
			}
			case R.id.imgBtnShowSchoolarships:
			{
				Toast.makeText(getApplicationContext(), "Pregled informacija o aktuelnim studentskim stipendijama", Toast.LENGTH_LONG).show();
				break;
			}
			case R.id.btnShowSchoolarships:
			{
				Intent newRequest = new Intent(this, ShowAllSchoolarshipsActivity.class);
				startActivity(newRequest);
				
				break;
			}
			case R.id.imgBtnShowInternships:
			{
				Toast.makeText(getApplicationContext(), "Pregled informacija o studentskim praksama", Toast.LENGTH_LONG).show();
				break;
			}
			case R.id.btnShowInternships:
			{
				Intent newRequest = new Intent(this, ShowAllInternshipsActivity.class);
				startActivity(newRequest);
				
				break;
			}
		}
	}
	
	@Override
	protected void onResume() {
		// TODO Auto-generated method stub
		super.onResume();
		
		IntentFilter filter = new IntentFilter(CommunicationService.ALL_REQUESTS_RESPONSE);
		responseReceiver = new ResponseReceiver();
		registerReceiver(responseReceiver, filter);
	}
	
	@Override
	protected void onPause() {
		// TODO Auto-generated method stub
		super.onPause();
		
		unregisterReceiver(responseReceiver);
	}
	
	private class ResponseReceiver extends BroadcastReceiver
	{
		@Override
		public void onReceive(Context context, Intent intent) {
			
			int success = intent.getIntExtra("success1", -1);
						
			if(success > 0)
			{
				Intent newRequest = new Intent(getApplicationContext(), ShowAllRequestsActivity.class);
				newRequest.putExtra("requests", intent.getParcelableArrayListExtra("requests"));
				startActivity(newRequest);
			}
		}
		
	}
}
