package com.example.hysteria;

import java.util.ArrayList;
import java.util.List;

import com.example.domain.Request;

import com.example.hysteria.R;
import android.app.Activity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.ListView;

public class ShowAllRequestsActivity extends Activity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_show_all_requests);
		
		List<Request> requests = getIntent().getParcelableArrayListExtra("requests");
		
		RequestAdapter adapter = new RequestAdapter(this, R.layout.row_request,requests);
		
		ListView listOfAttractions = (ListView)findViewById(android.R.id.list);
		listOfAttractions.setAdapter(adapter);
	}
}
