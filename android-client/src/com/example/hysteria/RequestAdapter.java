package com.example.hysteria;

import java.util.List;

import com.example.hysteria.R;

import com.example.domain.Request;

import android.app.Activity;
import android.content.res.Resources;
import android.content.res.TypedArray;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.ImageView;
import android.widget.TextView;

public class RequestAdapter extends ArrayAdapter<Request>{

	Activity context;
	List<Request> requests;
	
	public RequestAdapter(Activity context, int resource, List<Request> objects)
	{
		super(context, resource, objects);
		
		this.context = context;
		this.requests = objects;
	}
	
	@Override
	public View getView(int position, View convertView, ViewGroup parent) {
				
		Request request = requests.get(position);
		
		LayoutInflater inflater = context.getLayoutInflater();
		View row = inflater.inflate(R.layout.row_request, null);
		
		Resources res = context.getResources();
		TypedArray icons = res.obtainTypedArray(R.array.category_icons);
		
		ImageView reqImg = (ImageView)row.findViewById(R.id.imgViewCategory);
		//reqImg.setImageResource(icons.getResourceId(request., 0));
		TypedArray requestContents = res.obtainTypedArray(R.array.categories);
		int index=0;
		for(int i=0; i<requestContents.length(); i++)
		{
			if(requestContents.getString(i).equalsIgnoreCase(request.getType()))
			{
				index = i;
				break;
			}
		}
		reqImg.setImageResource(icons.getResourceId(index, 0));
		
		
		TextView name = (TextView)row.findViewById(R.id.att_name);
		name.setText("Datum zahtevanja " + request.getDateOfRequest());
		
		TextView creator = (TextView)row.findViewById(R.id.creator_username);
		creator.setText("Status " + request.getStatus());
		
		TextView dateAdded = (TextView)row.findViewById(R.id.date_added);
		dateAdded.setText("Komentar " + request.getComment());
		
		return row;
	}
}
