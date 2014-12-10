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
import android.widget.Spinner;
import android.widget.Toast;

public class MakeRequestActivity extends Activity implements OnClickListener {

	Spinner spCategory;
	Button btnMakeRequest;
	
	ResponseReceiver responseReceiver;
	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_make_request);
		
		spCategory = (Spinner)findViewById(R.id.spnRequestType);
		spCategory.setAdapter(new CategoryAdapter(this, R.layout.row_request_categories, getResources().getStringArray(R.array.categories)));
		
		btnMakeRequest = (Button)findViewById(R.id.btnMakeRequest);
		btnMakeRequest.setOnClickListener(this);
	}

	@Override
	public void onClick(View v) {
		
		Intent service = new Intent(this, CommunicationService.class);
		service.putExtra("requestType", CommunicationType.REQUIRE_DOCUMENT);
		String cat = spCategory.getSelectedItem().toString();
		service.putExtra("category", cat);
		service.putExtra("username", "13638");
		startService(service);
	}
	
	@Override
	protected void onResume() {
		// TODO Auto-generated method stub
		super.onResume();
		
		IntentFilter filter = new IntentFilter(CommunicationService.REQUIRE_DOCUMENT_RESPONSE);
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
			
			int success = intent.getIntExtra("success", -1);
			String message = intent.getStringExtra("message");
			
			Toast.makeText(getApplicationContext(), message, Toast.LENGTH_LONG).show();
			
		}
		
	}
}
