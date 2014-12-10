package com.example.domain;

import java.util.Date;


import android.os.Parcel;
import android.os.Parcelable;

public class Request implements Parcelable{
	
	private int id;
	private String type;
	private String category;
	private String dateOfRequest;
	private String dateOfResponse;
	private String status;
	private String comment;
	private String userId;
	
	public Request()
	{
		
	}
	
	public int getId() {
		return id;
	}
	public void setId(int id) {
		this.id = id;
	}
	public String getType() {
		return type;
	}
	public void setType(String type) {
		this.type = type;
	}
	public String getCategory() {
		return category;
	}
	public void setCategory(String category) {
		this.category = category;
	}
	public String getDateOfRequest() {
		return dateOfRequest;
	}
	public void setDateOfRequest(String dateOfRequest) {
		this.dateOfRequest = dateOfRequest;
	}
	public String getDateOfResponse() {
		return dateOfResponse;
	}
	public void setDateOfResponse(String dateOfResponse) {
		this.dateOfResponse = dateOfResponse;
	}
	public String getStatus() {
		return status;
	}
	public void setStatus(String status) {
		this.status = status;
	}
	public String getComment() {
		return comment;
	}
	public void setComment(String comment) {
		this.comment = comment;
	}
	public String getUserId() {
		return userId;
	}
	public void setUserId(String userId) {
		this.userId = userId;
	}
	@Override
	public int describeContents() {
		// TODO Auto-generated method stub
		return 0;
	}
	
	public Request(Parcel in)
	{		
		id = in.readInt();
		type = in.readString();
		category = in.readString();
		dateOfRequest = in.readString();
		dateOfResponse = in.readString();
		status = in.readString();
		comment = in.readString();
		userId = in.readString();
	}
	
	@Override
	public void writeToParcel(Parcel dest, int flags) {
				
		dest.writeInt(id);
		dest.writeString(type);
		dest.writeString(category);
		dest.writeString(dateOfRequest);
		dest.writeString(dateOfResponse);
		dest.writeString(status);
		dest.writeString(comment);
		dest.writeString(userId);
		
	}
	
	public static final Parcelable.Creator<Request> CREATOR = new Parcelable.Creator<Request>() {
        public Request createFromParcel(Parcel in) {
            return new Request(in);
        }

        public Request[] newArray(int size) {
            return new Request[size];
        }
    };
	
	
}
