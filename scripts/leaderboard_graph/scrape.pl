#!/usr/bin/env perl

use warnings;
use strict;

use LWP::Simple;
use Sys::Hostname;

my $content = get("http://acss.alleg.net/Stats/Leaderboard.aspx");
if(!defined($content)){
	&batsignal("couldn't load leaderboard");
	exit;
}

print $content;


sub batsignal {
	my($msg)=shift @_;
	my $to = 'borgified@gmail.com';

	open(MAIL, "|/usr/sbin/sendmail -t");

	my $from=$0.'@spathiwa.com';
	my $subject="FAILED: $msg";

	print MAIL "To: $to\n";
	print MAIL "From: $from\n";
	print MAIL "Subject: $subject\n\n";

	print MAIL "-------------------------------------------\n";
	print MAIL "-------------------------------------------\n";

	close(MAIL);
}
