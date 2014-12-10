package com.example.services;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.util.ArrayList;
import java.util.List;

import org.apache.http.HttpResponse;
import org.apache.http.NameValuePair;
import org.apache.http.client.HttpClient;
import org.apache.http.client.entity.UrlEncodedFormEntity;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.DefaultHttpClient;
import org.apache.http.message.BasicNameValuePair;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import com.example.domain.Request;

import android.app.IntentService;
import android.content.Intent;
import android.graphics.Bitmap;

public class CommunicationService extends IntentService{

	//public static final String BASE_OF_URL = "http://10.10.67.153:8080/Hysteria/";
	public static final String BASE_OF_URL = "http://10.10.67.153:8080/New/";
	
	public static final String LOGIN_RESPONSE = "com.example.hysteria.LOGIN_RESPONSE";
	public static final String REQUIRE_DOCUMENT_RESPONSE = "com.example.hysteria.REQUIRE_DOCUMENT";
	public static final String ALL_REQUESTS_RESPONSE = "com.example.hysteria.ALL_REQUESTS_RESPONSE";
	
	public CommunicationService()
	{
		super("CommunicationService");
	}
	
	@Override
	protected void onHandleIntent(Intent intent) {
		
		switch(intent.getIntExtra("requestType", 0))
		{
			case CommunicationType.LOGIN:
			{
				login(intent);
				break;
			}
			case CommunicationType.REQUIRE_DOCUMENT:
			{
				requireDocument(intent);
				break;
			}
			case CommunicationType.ALL_REQUESTS:
			{
				allRequests(intent);
				break;
			}
		}
	}

	private StringBuilder inputStreamToString(InputStream is)
	{
		String line = "";
		StringBuilder total = new StringBuilder();
		BufferedReader rd = new BufferedReader(new InputStreamReader(is));
		try
		{
			while((line = rd.readLine()) != null)
			{
				total.append(line);
			}
		}
		catch(IOException e)
		{
			e.printStackTrace();
		}
		
		return total;
	}
	
	protected void login(Intent intent)
	{
		HttpClient client = new DefaultHttpClient();
		HttpPost post = new HttpPost(BASE_OF_URL + "login.php");
		try
		{			
			List<NameValuePair> pairs = new ArrayList<NameValuePair>();
			pairs.add(new BasicNameValuePair("username", intent.getStringExtra("username")));
			pairs.add(new BasicNameValuePair("password", intent.getStringExtra("password")));
			
			post.setEntity(new UrlEncodedFormEntity(pairs));
			
			HttpResponse response = client.execute(post);
			String res = inputStreamToString(response.getEntity().getContent()).toString();
			
			JSONObject json = new JSONObject(res);
			
			Intent sendResult = new Intent(LOGIN_RESPONSE);
			sendResult.putExtra("message",json.getString("message"));
			sendResult.putExtra("success",json.getInt("success"));
			sendBroadcast(sendResult);
		}
		catch(Exception e)
		{
			Intent sendResult = new Intent(LOGIN_RESPONSE);
			
			sendBroadcast(sendResult);
			
			e.printStackTrace();
		}
	}
	
	protected void requireDocument(Intent intent)
	{
		HttpClient client = new DefaultHttpClient();
		HttpPost post = new HttpPost(BASE_OF_URL + "add_request.php");
		try
		{			
			List<NameValuePair> pairs = new ArrayList<NameValuePair>();
			pairs.add(new BasicNameValuePair("username", intent.getStringExtra("username")));
			pairs.add(new BasicNameValuePair("category", intent.getStringExtra("category")));
						
			post.setEntity(new UrlEncodedFormEntity(pairs));
			
			HttpResponse response = client.execute(post);
			String res = inputStreamToString(response.getEntity().getContent()).toString();
			
			JSONObject json = new JSONObject(res);
			
			Intent sendResult = new Intent(REQUIRE_DOCUMENT_RESPONSE);
			sendResult.putExtra("success",json.getInt("success"));
			sendResult.putExtra("message", json.getString("message"));
			
			sendBroadcast(sendResult);
		}
		catch(Exception e)
		{
			Intent sendResult = new Intent(REQUIRE_DOCUMENT_RESPONSE);
			
			sendBroadcast(sendResult);
			
			e.printStackTrace();
		}
	}
	
	protected void allRequests(Intent intent)
	{
		HttpClient client = new DefaultHttpClient();
		HttpPost post = new HttpPost(BASE_OF_URL + "get_requests.php");
		
		try
		{			
			List<NameValuePair> pairs = new ArrayList<NameValuePair>();
			pairs.add(new BasicNameValuePair("username", intent.getStringExtra("username")));
						
			post.setEntity(new UrlEncodedFormEntity(pairs));
			
			HttpResponse response = client.execute(post);
			String res = inputStreamToString(response.getEntity().getContent()).toString();
			
			JSONObject json = new JSONObject(res);
			
			ArrayList<Request> requests = giveMeRequests(res);
			
			Intent sendResult = new Intent(ALL_REQUESTS_RESPONSE);
			int success = json.getInt("success");
			sendResult.putExtra("success1",success);
			sendResult.putParcelableArrayListExtra("requests", requests);
			sendBroadcast(sendResult);
		}
		catch(Exception e)
		{
			Intent sendResult = new Intent(ALL_REQUESTS_RESPONSE);
			
			sendBroadcast(sendResult);
			
			e.printStackTrace();
		}
	}
	
	private ArrayList<Request> giveMeRequests(String res) throws JSONException
	{
		ArrayList<Request> requests = new ArrayList<Request>();
		JSONObject json = new JSONObject(res);
		JSONArray jsonRequests = json.getJSONArray("requests");
		
		for (int i = 0; i < jsonRequests.length(); i++) {
			
			Request req = new Request();
			JSONObject jsonRequest = jsonRequests.getJSONObject(i);
			
			req.setId(jsonRequest.getInt("id"));
			req.setType(jsonRequest.getString("tip"));
			req.setDateOfRequest("datum_zahtevanja");
			req.setDateOfResponse("datum_izdavanja");
			req.setStatus("status_f");
			req.setComment("komentar");
			
			requests.add(req);
		}
		
		return requests;
	}
}
