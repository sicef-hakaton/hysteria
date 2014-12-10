package com.example.hysteria;

import com.example.hysteria.R;
import com.example.services.CommunicationService;
import com.example.services.CommunicationType;

import android.app.Activity;
import android.app.Application;
import android.content.BroadcastReceiver;
import android.content.Context;
import android.content.Intent;
import android.content.IntentFilter;
import android.os.Bundle;
import android.text.Editable;
import android.text.TextWatcher;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class LoginActivity extends Activity implements TextWatcher, OnClickListener {

	Button btnLogin;
	EditText etUsername;
	EditText etPassword;
	
	ResponseReceiver responseReceiver;
	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_login);
		
		etUsername = (EditText)findViewById(R.id.edit_username);
		etPassword = (EditText)findViewById(R.id.edit_password);
		
		etUsername.addTextChangedListener(this);
		etPassword.addTextChangedListener(this);
		
		btnLogin = (Button)findViewById(R.id.button_login);
		btnLogin.setOnClickListener(this);
		btnLogin.setEnabled(false);
	}

	@Override
	protected void onResume() {
		super.onResume();
		
		IntentFilter filter = new IntentFilter(CommunicationService.LOGIN_RESPONSE);
		responseReceiver = new ResponseReceiver();
		registerReceiver(responseReceiver, filter);
	}
	
	@Override
	protected void onPause() {
		super.onPause();
		
		unregisterReceiver(responseReceiver);
	}
	
	@Override
	public void afterTextChanged(Editable arg0) {
		
		checkForValues();
	}

	@Override
	public void beforeTextChanged(CharSequence arg0, int arg1, int arg2,
			int arg3) {
		// TODO Auto-generated method stub
		
	}

	@Override
	public void onTextChanged(CharSequence arg0, int arg1, int arg2, int arg3) {
		// TODO Auto-generated method stub
		
	}
	
	private void checkForValues()
	{
		String username = etUsername.getText().toString();
		String password = etPassword.getText().toString();
		
		if(username.equals("") || password.equals(""))
			btnLogin.setEnabled(false);
		else
			btnLogin.setEnabled(true);
	}

	@Override
	public void onClick(View arg0) {
		
		String username = etUsername.getText().toString();
		String password = etPassword.getText().toString();
				
		Intent service = new Intent(this, CommunicationService.class);
		
		service.putExtra("request", CommunicationType.LOGIN);
		
		service.putExtra("username", username);
		service.putExtra("password", password);
		startService(service);
		
	}
	
	private class ResponseReceiver extends BroadcastReceiver
	{
		@Override
		public void onReceive(Context context, Intent intent) {
			
			int success = intent.getIntExtra("success", -1);
			String message = intent.getStringExtra("message");
			
			Toast.makeText(getApplicationContext(), message, Toast.LENGTH_LONG).show();
			
			if(success > 0)
			{
				Intent goToMain = new Intent(getApplicationContext(), MainActivity.class);
				startActivity(goToMain);
			}
		}
		
	}
}
